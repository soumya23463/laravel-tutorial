<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'age',
        'gender'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}