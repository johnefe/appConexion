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

    /*public function setImagenAttribute($url_img){
        $this->attributes['url_img'] = Carbon::now()->second.$url_img->getClientOriginalName();
        $name = Carbon::now()->second.$url_img->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($url_img));

    }*/
    
}
