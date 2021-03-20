<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'post', 'tags'];
    public function user(){
        return $this->belongsTo('App\user');
    }

    public function ratings(){
        return $this->hasMany('App\User');
    }
}
