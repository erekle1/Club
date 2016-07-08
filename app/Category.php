<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $translatedAttributes = ['title','desc'];


    public function posts(){
        return $this->belongsToMany('App\Posts','');
    }

}
