<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){

        return $this->hasMany('App\Post');
        //este usuario tiene muchos post
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function socialMedia(){

        return $this->hasMany('App\socialMedia');
       // return $this->belongsTo('App\User', 'foreign_key', 'other_key');
        //return $this->hasOne(socialMedia::class);
    }
}
