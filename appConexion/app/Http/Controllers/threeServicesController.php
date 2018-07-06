<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\threeHabilities;
use Session;

class threeServicesController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $habilities=threeHabilities::all();
    	return view('admin/tres_servicios', compact('habilities'));
    }
    public function edit($id)
    {
        $hability = threeHabilities::find($id);
        
        return view('/admin/tresServicios/edit',compact('hability'));
    }

    public function update(Request $request, $id)
    {
        $hability = threeHabilities::find($id);
        $hability->fill($request->all());
        $hability->save();

        Session::flash('success','Servicio Editado correctamente.');

        return redirect('/admin/threeServices');
    }
}
