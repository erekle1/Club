<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        $this->belongsToMany('App\User','role_user','user_id');
    }

    public function permissions(){
        $this->belongsToMany('App\Permission','permission_role','permission_id');
    }
}
