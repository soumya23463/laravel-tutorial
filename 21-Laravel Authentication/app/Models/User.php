<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user__roles');
    }
    // public function hasRole($roleName)
    // {
    //     return $this->roles()->where('role_name', $roleName)->exists();
    // }

}
