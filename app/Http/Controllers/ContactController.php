<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak', [
            "style" => "style-kontak",
            "title" => "KONTAK",
            "title_url" => "Kontak"
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'subject' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create($validateData);


        return redirect('/kontak')->with('success', 'The message has been sent,
        thank
        you');
    }
}
