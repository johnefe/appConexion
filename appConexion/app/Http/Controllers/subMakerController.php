<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subMaker;
use Session;

class subMakerController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
        $make=subMaker::where('id_maker',$id)->get();       
        return view('/admin/make/view', compact('make'));
    }

    public function editmaker($id)
    {
        $make=subMaker::find($id);
        
        return view('/admin/make/edit',compact('make'));
    }

   
    

    public function destroy($id){
    	
    	try {
                subMaker::destroy($id);
                //Session::flash('message','Diapositiva eliminado correctamente');
                return redirect('/admin/make');

            } catch (\Illuminate\Database\QueryException $e) {
                //Session::flash('error','No se puede eliminar ');
                return redirect('/admin/make');

            } 
    }
}
