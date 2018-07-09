<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contentVideo extends Model
{
    
    protected $table ="make_heart";

    protected $fillable=[
    	'id','title','body','url_img','link_video','icon','updated_at'
    ];
    
    protected $hidden = [
         'created_at',
    ];
}
