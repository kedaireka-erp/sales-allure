<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

   
    public function create()
    {
        $contactTypes = ContactType::all();
        return view('contacts.create', compact('contactTypes'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'contact_type_id'=> 'nullable' ,
            'name' =>'required',
            'email' =>'required',
            'address' =>'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact Created Successfully.');
    }

    
    public function show(Contact $contact)
    {
        //
    }

    
    public function edit(Contact $contact)
    {
        //
    }

    
    public function update(Request $request, Contact $contact)
    {
        //
    }

    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
