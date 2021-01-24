<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create() {
        return view('contact.form');
    }
    public function store() {
       
        $data = request()->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message', 'Thanks for your comment. We\'ll be in touch.');
    }
}
