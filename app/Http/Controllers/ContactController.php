<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return redirect('/');
    }

    public function processContact(Request $request)
    {
        Mail::to(config('mail.siteOwnerEmail'))->send(new Contact());
    }
}
