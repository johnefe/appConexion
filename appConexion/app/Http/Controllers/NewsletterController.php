<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
class NewsletterController extends Controller
{
    //
    public function store(Request $request){
       
       	$mensaje= new Mail;
        $mensaje->email=$request->email;
        $mensaje->save();
        return redirect('/');

    }
}
