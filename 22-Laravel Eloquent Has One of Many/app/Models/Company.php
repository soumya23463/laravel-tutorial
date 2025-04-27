<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function phoneNumbers()
    {
        return $this->hasOne(Phone_number::class); // Company has many Phone_numbers
    }
}