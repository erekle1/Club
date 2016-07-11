<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTrans extends Model
{
    protected $fillable = ['title','content','slug','locale_id','post_id'];

    public function post(){
        return $this->belongsTo('App\Post');
    }


}
