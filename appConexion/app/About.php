<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table ="ours";

    protected $fillable=[
    	'title','body',
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
