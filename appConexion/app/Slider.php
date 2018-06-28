<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table ="slider";

    protected $fillable=[
    	'title','body','url_img',
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
