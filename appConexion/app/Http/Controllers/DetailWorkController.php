<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subMaker;
use App\NetWorks;
use App\Promotion;
use App\About;
use App\Maker;

class DetailWorkController extends Controller
{
    //

    public function getDetail(Request $request, $id){

    	$promotions= Promotion::all();
		$redes=NetWorks::all();
		$about=About::limit(1)->get();
    	$make=subMaker::where('id',$id)->get(); 
    	return view('/public/detailWork', compact('make','promotions','about','redes'));

    }
}
