<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contentVideo;
use Session;

class contentVideoController extends Controller
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


        $contentVideo= contentVideo::all();
    	return view('admin/content_video', compact('contentVideo'));
    }

    public function edit($id)
    {
         $contentVideo=contentVideo::find($id);
        
        return view('/admin/contentVideo/edit',compact('contentVideo'));
    }

    public function update(Request $request, $id)
    {
        $contentVideo= contentVideo::find($id);
        $img = $contentVideo->url_img;

        if($request->hasFile('url_img')){

            $url_img= $request->url_img->getClientOriginalName();
            $request->url_img->storeAs('public/img/about',$url_img);
            $contentVideo->title= $request->title;
            $contentVideo->body=$request->body;
            $contentVideo->icon=$request->icon;
            $contentVideo->url_img=$url_img;
            $contentVideo->save();
           Session::flash('success','Editado correctamente.');
            return redirect('/admin/contentVideo');

        }
        else{

            $url_img=$img;
            $contentVideo->title= $request->title;
            $contentVideo->body=$request->body;
            $contentVideo->icon=$request->icon;
            $contentVideo->url_img=$url_img;
            $contentVideo->save();
            Session::flash('success','Editado correctamente.');
            return redirect('/admin/contentVideo');
        }
       
        return $slider;

        
    }
}
