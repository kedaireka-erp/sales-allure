<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ContactType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactTypeController extends Controller
{
    
    public function index()
    {
        $contact_types = ContactType::all();
        return view('contact_types.index', compact('contact_types'));
    }

    
    public function create()
    {
        return view('contact_types.create');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|unique:contact_types|max:255',
            'status' => 'required',
        ]);
            
        try {
            $contact_type = ContactType::create($request->all());
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('contact_types.index')->with('success', 'Contact Type created successfully.');
    }

    
    public function show(ContactType $contactType)
    {
        //
    }

    
    public function edit($id)
    {
        $contact_type = ContactType::findOrFail($id);
        $contact_types = ContactType::all();
        return view('contact_types.edit', compact('contact_type', 'contact_types'));
    }

    
    public function update(Request $request, $id)
    {
        $contact_type = ContactType::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:contact_types|max:255',
            'status' => 'required',
        ]);

        try {
            $contact_type->update($request->all());
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('contact_types.index')->with('success', 'Contact Type Update Successfully.');
    }

    
    public function destroy(ContactType $contactType)
    {
        $contactType->delete();
        $deleted = $contactType->delete();
        if($deleted)
        {
            return redirect()->route('contact_types.index')->with('success', 'Contact Type Deleted Successfully!');
        }
        else
        {
            return redirect()->route('contact_types.index')->with('error', 'Contact Type Deleted Failed!');
        }
    }
}
