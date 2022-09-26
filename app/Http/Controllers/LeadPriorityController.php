<?php

namespace App\Http\Controllers;

use App\Models\LeadPriority;
use Illuminate\Http\Request;

class LeadPriorityController extends Controller
{
    public function index()
    {
        $leadPriorities = LeadPriority::latest()->paginate(10);
        return view('leadpriorities.index', compact('leadPriorities'));
    }

    public function create()
    {
        return view("leadpriorities.create");
    }

    public function store(Request $request)
    {
        $leadPriorities = LeadPriority::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('leadpriorities.index');
    }

    public function edit(LeadPriority $leadpriority)
    {

        return view("leadpriorities.edit", compact("leadpriority"));
    }

    public function update(Request $request, LeadPriority $leadpriority)
    {
        $leadpriority->update([
            "name" => $request->name ?? $leadpriority->name,
            "description" => $request->description ?? $leadpriority->description
        ]);

        return redirect()->route('leadpriorities.index');
    }

    public function destroy(LeadPriority $leadpriority)
    {
        $leadpriority->delete();

        return redirect()->route('leadpriorities.index');
    }


    public function show(LeadPriority $leadPriority)
    {
        //
    }
}