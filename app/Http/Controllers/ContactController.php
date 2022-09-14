<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Contact;
use App\Models\LeadSource;
use App\Models\ContactType;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
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

        try {
            $contact = Contact::create($validated);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }  

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

    
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $validated = $request->validated();

        try {
            $contact->update($validated);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('contacts.index')->with('success', 'Contact Update Successfully.');
    }

    
    public function destroy(Contact $contact)
    {
        
        $deleted = $contact->delete();

        if($deleted){
            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
        }

        return redirect()->route('contacts.index')->with('error', 'Contact Deleted Failed.');
    }
}
