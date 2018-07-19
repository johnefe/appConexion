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

    	$date= Date::all();
    	return view('admin/date', compact('date'));
    }

    public function edit($id)
    {
        $date = Date::find($id);
        
        return view('/admin/date/edit',compact('date'));
    }

   
    public function update(Request $request, $id)
    {
        $date = Date::find($id);
        $img = $date->logo;

        if($request->hasFile('logo')){

            $logo= $request->logo->getClientOriginalName();
            $request->logo->storeAs('public/img/logo',$logo);
            $date->title= $request->title;
 			$date->email=$request->email;
 			$date->phone=$request->phone;
 			$date->city=$request->city;
 			$date->address=$request->address;
            $date->logo=$logo;
            $date->save();
            return redirect('/admin/date');

        }
        else{

            $logo=$img;
            $date->title= $request->title;
     		$date->email=$request->email;
 			$date->phone=$request->phone;
 			$date->city=$request->city;
 			$date->address=$request->address;
            $date->logo=$logo;
            $date->save();
            return redirect('/admin/date');
        }
    }
}
