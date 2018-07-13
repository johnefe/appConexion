<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    //
    protected $table ="data";

    protected $fillable=[
    	'title','logo','phone','email','address','city',
    ];
    
    protected $hidden = [
        'id','created_at', 'updated_at',
    ];
}

