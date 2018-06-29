<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NetWorks;
use App\threeHabilities;
use App\Slider;
use App\About;
use App\Maker;
use App\Heart;
use App\Promotion;

class InicioController extends Controller
{
    //
    public function index(Request $request){

    	$promotions= Promotion::all();
    	$makes= Maker::limit(6)->get();
    	$about=About::limit(1)->get();
    	$heart=Heart::limit(1)->get();
    	$threeHabilities= threeHabilities::limit(3)->get();
    	$slider= Slider::all();
    	$redes=NetWorks::all();
    	return view('inicio', compact('redes','threeHabilities','slider','about','makes','heart','promotions'));

    }
}
