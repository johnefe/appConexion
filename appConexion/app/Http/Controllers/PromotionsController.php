<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Promotion;
use Illuminate\Support\Str;

class PromotionsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $promotions= Promotion::all();
        return view('/admin/promotions/listPromotion', compact('promotions'));
    }

    public function create(){
        return view('/admin/promotions/create');
    }

    
    public function store(Request $request)
    {   


        if($request->hasFile('link_image')){

            $title= $request->title;
            $body= $request->body;
            $body_2= $request->body_2;
            $price= $request->price;
            $link_image= $request->link_image->getClientOriginalName();
            $request->link_image->storeAs('public/img/promotions',$link_image);
            
            $promotion= new Promotion;
            $promotion->title= $title;
            $promotion->body=$body;
            $promotion->body_2=$body_2;
            $promotion->price=$price;
            $promotion->link_image=$link_image;
            $promotion->save();
            Session::flash('success','Promoticion creada exitosamente.');
            return redirect('/admin/promotions');
        }
        else{
            Session::flash('error','Escoge una imágen.');
            return view('/admin/promotions/create');
        }
    }
     
    public function cancel(){
        return view('/admin/promotions');
    }

    public function edit($id)
    {
        $promotion = Promotion::find($id);
        
        return view('/admin/promotions/edit',compact('promotion'));
    }

   
    public function update(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        $img = $promotion->link_image;

        if($request->hasFile('link_image')){

            $link_image= $request->link_image->getClientOriginalName();
            $request->link_image->storeAs('public/img/promotions',$link_image);
            $promotion->title= $request->title;
            $promotion->body=$request->body;
            $promotion->body_2=$request->body_2;
            $promotion->price=$request->price;
            $promotion->link_image=$link_image;
            $promotion->save();
            return redirect('/admin/promotions');

        }
        else{

            $link_image=$img;
            $promotion->title= $request->title;
            $promotion->body=$request->body;
            $promotion->body_2=$request->body_2;
            $promotion->price=$request->price;
            $promotion->link_image=$link_image;
            $promotion->save();
            return redirect('/admin/promotions');
        }
       
        return $promotion;
    }


    public function destroy($id)
    {
        try {
                Promotion::destroy($id);
                //Session::flash('message','Diapositiva eliminado correctamente');
                return redirect('/admin/promotions');

            } catch (\Illuminate\Database\QueryException $e) {
                //Session::flash('error','No se puede eliminar ');
                return redirect('/admin/promotions');

            } 
    }
}
