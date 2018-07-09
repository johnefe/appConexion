<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class SuscriptionController extends Controller
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

        $mails= Mail::all();

    	return view('admin/suscriptions', compact('mails'));
    }
}
