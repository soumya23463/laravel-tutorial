<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // $customers = Customer::with('latestOrder')->get();
        // $customers = Customer::with('latestOrder')->find(2);
        // $customers = Customer::with('orders')->with('oldestOrder')->find(2);
        // $customers = Customer::with('orders')->with('smallestOrder')->find(2);
        $customers = Customer::with('orders')->with('largestOrder')->find(2);
        return $customers;
    }
}