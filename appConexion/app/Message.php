<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table ="messages";

    protected $fillable=[
    	'name','phone','email','body','created_at',
    ];
    
    protected $hidden = [
        'id', 'updated_at',
    ];
}
