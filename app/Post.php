<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['status','views','user_id'];

    public function postTrans(){

        return $this->hasMany('App\postTrans','post_id');
    }

}
