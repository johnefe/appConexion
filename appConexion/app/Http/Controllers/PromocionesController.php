<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subMaker;
use App\NetWorks;
use App\Promotion;
use App\About;
use App\Maker;
use App\Date;

class PromocionesController extends Controller
{
    public function getPromocion(Request $request, $id){

    	$promotions= Promotion::all();
		$redes=NetWorks::all();
		$about=About::limit(1)->get();
		$date=Date::limit(1)->get();
		$categoria=Maker::where('id',$id)->get();
		$make=Promotion::where('id',$id)->get();       
        return view('/public/promociones', compact('make', 'promotions','about','redes','categoria','date'));

    }
}
