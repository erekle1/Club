<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title','desc'];
    
    public function catTrans(){
        return $this->hasMany('App\CatTrans','cat_id');
    }
    public function firstTrans(){
        return $this->catTrans()->first();
    }


}
