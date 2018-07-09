<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table ="slider";

    protected $fillable=[
    	'id','title','body','url_img',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
}
