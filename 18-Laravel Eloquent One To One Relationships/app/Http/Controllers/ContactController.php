<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Student;
class ContactController extends Controller
{
    public function index()
    {
        // Fetch all contacts
        // $contacts = Contact::all();
        $contacts = Contact::with('student')->get();

       return $contacts;
    }
}
