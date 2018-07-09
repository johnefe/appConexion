<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Message;

class MessagesController extends Controller
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

        $messages= Message::orderBy('created_at','des')->get();

    	return view('admin/messagess', compact('messages'));
    }
     public function destroy($id)
    {
        try {
                Message::destroy($id);
                //Session::flash('message','Diapositiva eliminado correctamente');
                return redirect('/admin/messages');

            } catch (\Illuminate\Database\QueryException $e) {
                //Session::flash('error','No se puede eliminar ');
                return redirect('/admin/messages');

            } 
    }
}
