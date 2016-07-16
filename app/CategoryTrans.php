<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTrans extends Model
{
    protected $fillable     = ['title','desc','locale_id','cat_id'];
    public    $timestamps   = false;

    public function category(){

        return $this->belongsTo('App\Category');
    }

}
