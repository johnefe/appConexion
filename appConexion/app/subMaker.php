<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subMaker extends Model
{
    protected $table ="subMaker";

    protected $fillable=[
    	'id','title','body','body_2','body_3','url_img',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
//revisarlo ps lleva foranea