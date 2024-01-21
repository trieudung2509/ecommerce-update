<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function contact(Request $request) {
        $contact = new Contact;
        
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->messages = $request->comments;
        
        $contact->save();
        return response()->json([
            'status' => 'Congratulation',
            'message' => 'Contact success'
        ], 200);
    }
}