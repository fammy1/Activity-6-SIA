<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id', 'post_id', 'rating'];
    public function user(){
        return $this->belongsTo('App\user');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }
}
