<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name','display_name','description'];

    public function roles(){
        $this->belongsToMany('App\Permission','permission_role','permission_id');
    }

}
