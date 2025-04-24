<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['student_id', 'phone', 'email'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}