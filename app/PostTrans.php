<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTrans extends Model
{
    //

    public function Post(){
    	return $this->belongsTo(Post::class); 
    }
}
