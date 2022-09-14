<?php

namespace App\Http\Controllers;

use App\Models\leadPriority;
use Illuminate\Http\Request;

class LeadPriorityController extends Controller
{
    public function index()
    {
        $leadPriorities = leadPriority::get();
        return view('leadpriorities.index', compact('leadPriorities'));
    }

    public function create()
    {
        return view("leadpriorities.create");
    }

    public function store(Request $request)
    {
        $leadPriorities = leadPriority::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('leadpriorities.index');
    }

    public function edit($id)
    {
        $leadPriority = leadPriority::findOrFail($id);

        return view("leadpriorities.edit", compact("leadPriority"));
    }

    public function update(Request $request, $id)
    {
        $leadPriority = leadPriority::findOrFail($id);
        $leadPriority->update([
            "name" => $request->name ?? $leadPriority->name,
            "description" => $request->description ?? $leadPriority->description
        ]);

        return redirect()->route('leadpriorities.index');
    }

    public function destroy($id)
    {
        $leadPriority = leadPriority::findOrFail($id);
        $leadPriority->delete();

        return redirect()->route('leadpriorities.index');
    }


    public function show(leadPriority $leadPriority)
    {
        //
    }
}