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
        return view('contacts.detail', compact('contact'));
    }

    
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $contacts = Contact::all();
        return view('contacts.edit', compact('contact', 'contacts'));
    }

    
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return to_route('contact_types.index');
    }

    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
