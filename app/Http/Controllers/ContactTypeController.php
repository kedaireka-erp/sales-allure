<?php

namespace App\Http\Controllers;

use App\Models\ContactType;
use Illuminate\Http\Request;

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
            'name' => 'required',
            'status' => 'required',
        ]);

        ContactType::create($request->all());

        return redirect()->route('contact_types.index')
            ->with('success', 'ContactType created successfully.');
    }

    
    public function show(ContactType $contactType)
    {
        //
    }

    
    public function edit($id)
    {
        $contactType = ContactType::findOrFile($id);
        $contactTypes = ContactType::all();
        return view('contact_types.edit', compact('contact_types'));
    }

    
    public function update(Request $request, $id)
    {
        $contact_type = ContactType::findOrFail($id);
        $contact_type->update($request->all());

        return to_route('contact_types.index');
    }

    
    public function destroy(ContactType $contactType)
    {
        //
    }
}
