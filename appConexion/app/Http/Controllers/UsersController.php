<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    //

    public function index(Request $request){


    	$users = User::all();
    	return view('users.index',compact('users'));

    }

    public function getUser(Request $request, $id){

    	$user = User::find($id);
    	return $user;
    }
}
