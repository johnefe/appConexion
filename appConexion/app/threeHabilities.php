<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class threeHabilities extends Model
{
    
    protected $table ="three_habilities";

    protected $fillable=[
    	'title','body','link_icon',
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}

