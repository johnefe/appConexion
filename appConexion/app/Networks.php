<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Networks extends Model
{
    //
    protected $table ="networks";

    protected $fillable=[
    	'logo','link','name',
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
