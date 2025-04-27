<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Define the relationship for orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Retrieve the latest order of the customer
    public function latestOrder()
    {
        return $this->hasOne(Order::class)->latestOfMany();
    }

    // Retrieve the oldest order of the customer
    public function oldestOrder()
    {
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    public function largestOrder()
    {
        return $this->hasOne(Order::class)->ofMany("amount", "max");
    }
    public function smallestOrder()
    {
        return $this->hasOne(Order::class)->ofMany("amount", "min");
    }
}