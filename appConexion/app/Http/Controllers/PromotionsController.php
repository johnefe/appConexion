<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionsController extends Controller
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


    public function newPromotion(){

    	return view('admin/promotions/newPromotion');
    }
     public function listPromotion(){

    	return view('admin/promotions/listPromotion');
    }
}
