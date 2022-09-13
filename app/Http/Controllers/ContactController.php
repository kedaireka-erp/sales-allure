<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\LeadSource;
use App\Models\ContactType;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

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

    
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();
        $create = Contact::create($validated);

        if($create){
            return redirect()->route('contacts.index')->with('success', 'Contact created successfully');
        }   

        return redirect()->route('contacts.create')->with('error', 'Contact Created Failed.');
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

    
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $validated = $request->validated();
        $update = $contact->update($validated);

        if($update){
            return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
        }

        return to_route('contacts.edit', $contact->id)->with('error', 'Contact Edited Failed.');
    }

    
    public function destroy(Contact $contact)
    {
        
        $deleted = $contact->delete();

        if($deleted){
            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
        }

        return redirect()->route('contacts.index')->with('success', 'Contact Deleted Failed.');
    }
}
