<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NetWorks;
use App\threeHabilities;
use App\Slider;
use App\About;
use App\Maker;
use App\contentVideo;
use App\Promotion;
use App\Message;

class InicioController extends Controller
{
    //
    public function index(Request $request){

    	$promotions= Promotion::all();
    	$makes= Maker::limit(6)->get();
    	$about=About::limit(1)->get();
    	$contentVideo=contentVideo::limit(1)->get();
    	$threeHabilities= threeHabilities::limit(3)->get();
    	$slider= Slider::all();
    	$redes=NetWorks::all();
    	return view('inicio', compact('redes','threeHabilities','slider','about','makes','contentVideo','promotions'));

    }

    public function store(Request $request){

        $mensaje= new Message;
        $mensaje->name=$request->name;
        $mensaje->phone=$request->phone;
        $mensaje->email=$request->email;
        $mensaje->body=$request->body;

        $mensaje->save();
        return redirect('/');

    }
}
