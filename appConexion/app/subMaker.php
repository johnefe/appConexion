<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subMaker extends Model
{
    protected $table ="subMaker";

    protected $fillable=[
    	'id','title','body','url_img','id_maker'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function maker(){

    	return  $this->belongsTo('App\Maker');
    }
    
}
//revisarlo ps lleva foranea