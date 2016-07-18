<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','display_name','description'];
    
    public $timestamps = false;


    public function users(){
        $this->belongsToMany('App\User','role_user','user_id');
    }

    public function permissions(){
        $this->belongsToMany('App\Permission','permission_role','permission_id');
    }
}
