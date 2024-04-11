<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contact $contact)
    {
        return view('dashboard.contact.index', [
            'contacts' => $contact->latest()->get()
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('dashboard.contact.show', [
            'contact' => $contact
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);

        return redirect('/dashboard/contact')->with('delete', 'Message Deleted !!!');
    }
}
