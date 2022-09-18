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
use App\Models\LeadInterest;

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
        $leadInterests = LeadInterest::all();
        return view('contacts.create', compact('companies', 'contactTypes', 'leadSources', 'leadStatuses', 'leadInterests'));
    }

    
    public function store(ContactRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        try {
            $contact = Contact::create($validated);
            $contact->leadInterests()->sync($request->leadInterest);
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
        $leadInterests = LeadInterest::all();
        $contacts = Contact::all();
        return view('contacts.edit', compact('contact', 'contacts', 'contactTypes', 'leadSources', 'companies', 'leadStatuses', 'leadInterests'));
    }

    
    public function update(ContactRequest $request, Contact $contact)
    {
        $validated = $request->validated();

        try {
            $contact->update($validated);
            $contact->leadInterests()->sync($request->leadInterest);
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
