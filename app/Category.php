<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title','desc'];
    protected $fillable =['parent'];
    public $timestamps = false;
    
    
    public function catTrans(){
        return $this->hasMany('App\CategoryTrans','cat_id');
    }
    
    
    public function firstTrans(){
        return $this->catTrans()->first();
    }

    public function parent(){
        return $this->belongsTo('App\Category','parent');
//        return Category::where('id',$this->parent)->first();
    }

    public function children(){
       return $this->hasMany('App\Category','parent');
//       return Category::where('parent',$this->id);
    }


}
