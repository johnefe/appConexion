<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use Session;

class SliderController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $sliders= Slider::all();
    	return view('admin/slider', compact('sliders'));

    }
  
    public function create(){
        return view('/admin/slider/create');
    }

    
    public function store(Request $request)
    {   


        if($request->hasFile('url_img')){

            $title= $request->title;
            $body= $request->body;
            $url_img= $request->url_img->getClientOriginalName();
            $request->url_img->storeAs('public/img/slider',$url_img);
            
            $slider= new Slider;
            $slider->title= $title;
            $slider->body=$body;
            $slider->url_img=$url_img;
            $slider->save();
            Session::flash('success','Diapositiva creada exitosamente.');
            return redirect('/admin/slider');
        }
        else{
            Session::flash('error','Escoge una imágen.');
            return view('/admin/slider/create');
        }
    }
     
    public function cancel(){
        return view('/admin/slider');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        
        return view('/admin/slider/edit',compact('slider'));
    }

   
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $img = $slider->url_img;

        if($request->hasFile('url_img')){

            $url_img= $request->url_img->getClientOriginalName();
            $request->url_img->storeAs('public/img/slider',$url_img);
            $slider->title= $request->title;
            $slider->body=$request->body;
            $slider->url_img=$url_img;
            $slider->save();
            return redirect('/admin/slider');

        }
        else{

            $url_img=$img;
            $slider->title= $request->title;
            $slider->body=$request->body;
            $slider->url_img=$url_img;
            $slider->save();
            return redirect('/admin/slider');
        }
    }


    public function destroy($id)
    {
        try {
                Slider::destroy($id);
                //Session::flash('message','Diapositiva eliminado correctamente');
                return redirect('/admin/slider');

            } catch (\Illuminate\Database\QueryException $e) {
                //Session::flash('error','No se puede eliminar ');
                return redirect('/admin/slider');

            } 
    }

}
