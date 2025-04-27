<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(Company::class); // User has one Company
    }


    public function phoneCompanyNumber()
    {
        return $this->hasOneThrough(
            Phone_number::class,
            Company::class,
        );
    }
}