<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;
use Session;

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

    public function update(Request $request, $id)
    {
        $make = Make::find($id);
        $make->fill($request->all());
        $make->save();

        Session::flash('success','Editado correctamente.');

        return redirect('/admin/make');
    }
}
