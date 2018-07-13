<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Date;

class DateController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data= Date::all();
    	return view('admin/date', compact('data'));
    }
}
