<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;
use Session;
use App\subMaker;

class MakeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $make = Maker::all();
    	return view('admin/make', compact('make'));
    }

      
    public function edit($id)
    {
         $make=Maker::find($id);
        
        return view('/admin/make/edit',compact('make'));
    }

    public function create(){
        //$categories = Category::pluck('name','id');
        $make = Maker::pluck('title','id');
        return view('/admin/make/create', compact('make'));
    }

   
    public function store(Request $request){

        if($request->hasFile('url_img')){

            $title= $request->title;
            $body= $request->body;
            $id_maker=$request->id_maker;
            $url_img= $request->url_img->getClientOriginalName();
            $request->url_img->storeAs('public/img/blog/sub-blog',$url_img);
            
            $make= new subMaker;
            $make->title= $title;
            $make->id_maker=$id_maker;
            $make->body=$body;
            $make->url_img=$url_img;
            $make->save();
            Session::flash('success','Trabajo creado exitosamente.');
            return redirect('/admin/make');
        }
        else{
            Session::flash('error','Escoge una imágen.');
            return view('/admin/make/create');
        }
    }

    public function update(Request $request, $id)
    {
        $make = Maker::find($id);
        $img = $make->url_img;

        if($request->hasFile('url_img')){

            $url_img= $request->url_img->getClientOriginalName();
            $request->url_img->storeAs('public/img/blog',$url_img);
            $make->title= $request->title;
            $make->url_img=$url_img;
            $make->save();
            return redirect('/admin/make');

        }
        else{

            $url_img=$img;
            $make->title= $request->title;
            $make->url_img=$url_img;
            $make->save();
            Session::flash('success','Editado correctamente.');
            return redirect('/admin/make');
        }
       
        return $make;

        
    }
    

}
