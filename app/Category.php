<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title','desc'];
    protected $fillable =['parent'];
    public $timestamps = false;
    
    
    public function catTrans()
    {
        return $this->hasMany('App\CategoryTrans','category_id','id');
    }
    
    
    public function firstTrans()
    {
        return $this->catTrans()->first();
    }

    public function parent(){
        return $this->belongsTo('App\Category','parent');

    }

    public function children(){
       return $this->hasMany('App\Category','parent');

    }


}
