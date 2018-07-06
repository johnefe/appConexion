<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;

class aboutUsController extends Controller
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

        $about=About::limit(1)->get();
    	return view('admin/about',compact('about'));
    }

    public function edit($id)
    {
         $about=About::find($id);
        
        return view('/admin/about/edit',compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->fill($request->all());
        $about->save();

        Session::flash('success','Editado correctamente.');

        return redirect('/admin/aboutUs');
    }

}
