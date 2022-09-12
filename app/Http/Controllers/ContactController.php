<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\LeadSource;
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
        $leadSources = LeadSource::all();
        return view('contacts.create', compact('contactTypes', 'leadSources'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'contact_type_id'=> 'nullable' ,
            'lead_source_id' => 'nullable',
            'name' =>'required',
            'email' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'note' =>'required',
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
        $contactTypes = ContactType::get();
        $leadSources = LeadSource::get();
        $contact = Contact::findOrFail($id);
        $contacts = Contact::all();
        return view('contacts.edit', compact('contact', 'contacts', 'contactTypes', 'leadSources'));
    }

    
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update([
            'contact_type_id'=> $request->contact_type_id ?? $contact->contact_type_id,
            'lead_source_id' => $request->lead_source_id ?? $contact->clead_source_id,
            'name' => $request->name ?? $contact->name,
            'email' =>$request->email ?? $contact->email,
            'address' =>$request->address ?? $contact->address,
            'phone' =>$request->phone ?? $contact->phone,
            'note' =>$request->note ?? $contact->note,
        ]);

        
        return to_route('contacts.index')->with('success', 'Contact Edited Successfully.');
    }

    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact Deleted Successfully.');
    }
}
