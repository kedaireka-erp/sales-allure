<?php

namespace App\Http\Controllers;

use App\Models\LeadSource;
use Illuminate\Http\Request;

class LeadSourceController extends Controller
{
    public function index()
    {
        $leadSources = LeadSource::latest()->paginate(10);
        return view('leadsources.index', compact('leadSources'));
    }

    public function create()
    {
        return view("leadsources.create");
    }

    public function store(Request $request)
    {
        $leadSources = LeadSource::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('leadsources.index');
    }

    public function edit(LeadSource $leadsource)
    {   
        $leadSource = $leadsource;
        return view("leadsources.edit", compact("leadSource"));
    }

    public function update(Request $request, LeadSource $leadsource)
    {
        $leadsource->update([
            "name" => $request->name ?? $leadsource->name,
            "description" => $request->description ?? $leadsource->description
        ]);

        return redirect()->route('leadsources.index');
    }

    public function destroy(LeadSource $leadsource)
    {
        $leadsource->delete();

        return redirect()->route('leadsources.index');
    }


    public function show(LeadSource $leadsource)
    {
        //
    }
}
