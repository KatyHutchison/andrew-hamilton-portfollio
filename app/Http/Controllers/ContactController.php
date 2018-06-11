<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact-form');
    }

    public function processMessage(Request $request)
    {
        $this->validateData($request);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to(config('mail.contact_email'))->send(new Contact($name, $email, $message));
        flash("Thanks <strong>$name</strong>, your message is on its way! I'll be in touch soon.")->success();

        return redirect('/contact');
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
    }
}
