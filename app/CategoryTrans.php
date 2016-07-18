<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTrans extends Model
{
    protected $fillable     = ['title','desc','locale_id','category_id'];
    public    $timestamps   = false;
    protected $table        = 'cat_trans';

    public function category(){

        return $this->hasOne('App\Category','category_id');
    }

}
