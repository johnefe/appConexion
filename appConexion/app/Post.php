<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relacion con un usuario
    public function user(){

    	return $this->belongsTo('App\User');
    	//este post pertenece a un usuario
    }

    
}
