<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //

    public function index(Request $request){


    	$users = User::all(); //recibe los datos en formato json
    	return view("users.index")->with('users', $users);

    }

    public function getUser(Request $request, $id){

    	$user = User::find($id);
    	return $user;
    }
}
