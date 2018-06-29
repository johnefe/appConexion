<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table ="promotions";

    protected $fillable=[
    	'title','body','body_2','link_image','price'
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
