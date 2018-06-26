<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\socialMedia;

class SocialMediaController extends Controller
{
    public function index(Request $request){

    
    	$medias = socialMedia::all(); //recibe los datos en formato json
    	//$media = User::find(1)->socialMedia;
    	return view("users.index")->with('medias', $medias);
    	//return view("users.index",compact("media"));

    }

}
