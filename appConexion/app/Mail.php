<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //
    protected $table ="emails";

    protected $fillable=[
    	'email','created_at',
    ];
    
    protected $hidden = [
        'id', 'updated_at',
    ];
}
