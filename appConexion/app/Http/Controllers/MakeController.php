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

    public function view($id)
    {
         $submake=subMaker::find($id);
        
        return view('/admin/make/view',compact('make'));
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
