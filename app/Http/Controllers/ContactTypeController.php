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
        
        $validated = Validator::make($request->all(), [
            'name' => 'required|unique:contact_types|max:255',
            'status' => 'required',
        ]);
        
        if($validated->fails())
        {
            return back()->withErrors($validated)->with('error', 'Contact Type Created Failed!')->withInput();
        }
        else
        {
            $create = ContactType::create($request->all());
            
            if($create)
            {
                return redirect()->route('contact_types.index')->with('success', 'Contact Type Created Successfuly!');
            }
            else
            {
                return redirect()->route('contact_types.create')->with('error', 'Contact Type Created Failed!');
            }
        }
    }

    
    public function show(ContactType $contact_type)
    {
        //
    }

    
    public function edit(ContactType $contact_type)
    {
        $contact_types = ContactType::all();
        return view('contact_types.edit', compact('contact_type', 'contact_types'));
    }

    
    public function update(Request $request, ContactType $contact_type)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'status' => 'required',
        ]);

        if($validated->fails())
        {
            return back()->withErrors($validated)->with('error', 'Contact Type Created Failed!')->withInput();
        }
        else
        {
            $update = $contact_type->update($request->all());
            
            if($update)
            {
                return redirect()->route('contact_types.index')->with('success', 'Contact Type Created Successfuly!');
            }
            else
            {
                return redirect()->route('contact_types.edit')->with('error', 'Contact Type Created Failed!');
            }
        }
    }

    
    public function destroy(ContactType $contact_type)
    {
        $deleted = $contact_type->delete();
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
