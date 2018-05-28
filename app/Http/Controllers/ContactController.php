<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function processContact()
    {
        return redirect('/');
    }
}
