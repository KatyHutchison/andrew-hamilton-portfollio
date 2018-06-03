<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact-form');
    }

    public function processContact(Request $request)
    {
        Mail::to(config('mail.siteOwnerEmail'))->send(new Contact());
    }
}
