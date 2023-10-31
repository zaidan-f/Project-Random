<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Replace with the actual model name

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    } 
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Check if all the required fields are not empty
        if (!empty($validatedData['name']) && !empty($validatedData['email']) && !empty($validatedData['message'])) {
            // Create a new instance of the Contact model and fill it with the validated data
            $contact = new Contact();
            $contact->name = $validatedData['name'];
            $contact->email = $validatedData['email'];
            $contact->message = $validatedData['message'];
    
            // Save the contact data to the database
            $contact->save();
    
            // Optionally, you can redirect the user after successful submission
            return redirect('/')->with('success', 'Thank you for your message!');
        } else {
            // Handle the case where the required fields are not filled out
            return redirect('/')->with('error', 'Please fill out all required fields.');
        }
    }
}    
