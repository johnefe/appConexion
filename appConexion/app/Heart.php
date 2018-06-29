<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    //
    protected $table ="make_heart";

    protected $fillable=[
    	'title','body','url_img','link_video','icon',
    ];
    
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
