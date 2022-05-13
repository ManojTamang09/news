<?php

namespace App;
use App\Models\User;
use App\Role;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }
}
