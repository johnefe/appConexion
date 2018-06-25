<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table ="comentario";

    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
