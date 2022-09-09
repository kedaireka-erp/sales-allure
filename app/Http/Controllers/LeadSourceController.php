<?php

namespace App\Http\Controllers;

use App\Models\LeadSource;
use Illuminate\Http\Request;

class LeadSourceController extends Controller
{
    public function index()
    {
        $leadSources = LeadSource::get();
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

    public function edit($id)
    {
        $leadSource = LeadSource::findOrFail($id);

        return view("leadsources.edit", compact("leadSource"));
    }

    public function update(Request $request, $id)
    {
        $leadSource = LeadSource::findOrFail($id);
        $leadSource->update([
            "name" => $request->name ?? $leadSource->name,
            "description" => $request->description ?? $leadSource->description
        ]);

        return redirect()->route('leadsources.index');
    }

    public function destroy($id)
    {
        $leadSource = LeadSource::findOrFail($id);
        $leadSource->delete();

        return redirect()->route('leadsources.index');
    }


    public function show(LeadSource $leadSource)
    {
        //
    }
}
