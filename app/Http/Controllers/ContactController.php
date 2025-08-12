<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
            'newsletter' => 'nullable|boolean',
        ]);

        // For now, we'll just return a success message
        // In a real application, you would send an email here
        // Mail::to('info@mgdtech.com')->send(new ContactFormMail($request->all()));

        return back()->with('success', 'Thank you for your message! We\'ll get back to you soon.');
    }
}
