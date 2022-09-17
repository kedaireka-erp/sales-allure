<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Company;
use App\Models\Contact;
use App\Models\LeadSource;
use App\Models\LeadStatus;
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
        $companies = Company::all();
        $contactTypes = ContactType::all();
        $leadSources = LeadSource::all();        
        $leadStatuses = LeadStatus::all();
        return view('contacts.create', compact('companies', 'contactTypes', 'leadSources', 'leadStatuses'));
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
        $companies = Company::all();
        $contactTypes = ContactType::all();
        $leadSources = LeadSource::all();
        $leadStatuses = LeadStatus::all();
        return view('contacts.detail', compact('contact', 'companies', 'contactTypes', 'leadSources', 'leadStatuses'));
    }

    
    public function edit(Contact $contact)
    {
        $companies = Company::get();
        $contactTypes = ContactType::get();
        $leadSources = LeadSource::get();
        $leadStatuses = LeadStatus::get();
        $contacts = Contact::all();
        return view('contacts.edit', compact('contact', 'contacts', 'contactTypes', 'leadSources', 'companies', 'leadStatuses'));
    }

    
    public function update(ContactRequest $request, Contact $contact)
    {
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
