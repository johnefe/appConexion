<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    
    protected $table ="ours";

    protected $fillable=[
    	'id','title','body',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
