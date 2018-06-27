<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\socialMedia;

class UsersController extends Controller
{
    //

    public function index(Request $request){


    	$users = User::all();
    	$redes= socialMedia::all();

    	//recibe los datos en formato json
    	//return view("users.index")->with('users', $users);
    	//return View('plantillas.index',compact('categories','masVendidos'));
    	return view('users.index',compact('users','redes'));

    }

    public function getUser(Request $request, $id){

    	$user = User::find($id);
    	return $user;
    }
}
