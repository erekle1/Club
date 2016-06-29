<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $translatedAttributes = ['title','content','slug'];


    public function User(){

    	return $this->belongsTo(User::class);
    }

    public function PostTrans(){

    	return $this->hasMany(PostTrans::class);
    }


}
