<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    //
    protected $table ="maker";

    protected $fillable=[
    	'id','title','body','body_2','body_3','url_img',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function submaker()
    {
        return $this->hasMany('App\subMaker');
    }
}
