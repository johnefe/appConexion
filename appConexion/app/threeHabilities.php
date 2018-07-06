<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class threeHabilities extends Model
{
    
    protected $table ="three_habilities";

    protected $fillable=[
    	'title','body','link_icon','updated_at',
    ];
    
    protected $hidden = [
        'id', 'created_at',
    ];
}

