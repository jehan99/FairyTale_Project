<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WeddingFormMail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'bride_name' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'email' => 'required|email',
            'wedding_date' => 'required|date',
            'time' => 'required',
            'wedding_location' => 'required|string|max:255',
            'ceremony_type' => 'required|string',
            'guests_num' => 'required|integer',
            'makeup_artist' => 'nullable|string',
            'contact' => ['required', 'regex:/^\+?[0-9\s-]{10,15}$/'],          
            'message' => 'required|string', 
        ]);

     Mail::to('fairytalephotograpy0001@gmail.com')->send(new WeddingFormMail($validated));

        return back()->with('success', 'Your request has been sent!');
    }
}