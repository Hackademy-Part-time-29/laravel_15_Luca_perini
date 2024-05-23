<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactView(){
        return view('contact-us');
    }
    public function ContactSuccess(Request $request){
        $ticketMail = new ContactMail($request->email,$request->name, $request->surname,$request->description);
        
        Mail::to('noreply@blog.it')->send($ticketMail);

        return redirect()->back()->with(['success'=>'Email Sent!']);
    }
}
