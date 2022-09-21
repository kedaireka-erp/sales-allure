<?php

namespace App\Http\Controllers;

use App\Models\leadPriority;
use Illuminate\Http\Request;

class LeadPriorityController extends Controller
{
    public function index()
    {
        $leadPriorities = leadPriority::latest()->paginate(10);
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

    public function edit(leadPriority $leadpriority)
    {

        return view("leadpriorities.edit", compact("leadpriority"));
    }

    public function update(Request $request, leadPriority $leadpriority)
    {
        $leadpriority->update([
            "name" => $request->name ?? $leadpriority->name,
            "description" => $request->description ?? $leadpriority->description
        ]);

        return redirect()->route('leadpriorities.index');
    }

    public function destroy(leadPriority $leadpriority)
    {
        $leadpriority->delete();

        return redirect()->route('leadpriorities.index');
    }


    public function show(leadPriority $leadPriority)
    {
        //
    }
}