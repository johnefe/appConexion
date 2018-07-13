<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subMaker;
use App\NetWorks;
use App\Promotion;
use App\About;
use App\Maker;

class TrabajosController extends Controller
{
    //
    public function getTrabajos(Request $request, $id){

    	$promotions= Promotion::all();
		$redes=NetWorks::all();
		$about=About::limit(1)->get();
		$categoria=Maker::where('id',$id)->get();
		$make=subMaker::where('id_maker',$id)->get();       
        return view('/public/trabajos', compact('make', 'promotions','about','redes','categoria'));

    }
}
