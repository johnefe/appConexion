<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Networks;
use Session;

class NetworksController extends Controller
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

        $networks=Networks::all();

    	return view('admin/networks', compact('networks'));
    }

     public function edit($id)
    {
         $network=Networks::find($id);
        
        return view('/admin/networks/edit',compact('network'));
    }

    public function update(Request $request, $id)
    {
        $network = Networks::find($id);
        $network->fill($request->all());
        $network->save();

        Session::flash('success','Editado correctamente.');

        return redirect('/admin/networks');
    }

}
