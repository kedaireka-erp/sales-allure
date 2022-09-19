<?php

namespace App\Http\Controllers;

use App\Models\LeadInterest;
use Illuminate\Http\Request;

class LeadInterestController extends Controller
{
    
    public function index()
    {
        $leadInterests = leadInterest::latest()->paginate(10);
        return view('leadinterests.index', compact('leadInterests'));
    }

    public function create()
    {
        return view("leadinterests.create");
    }

    public function store(Request $request)
    {
        $leadInterests = leadInterest::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('leadinterests.index');
    }

    public function edit(LeadInterest $leadinterest)
    {
        return view("leadinterests.edit", compact("leadinterest"));
    }

    public function update(Request $request, LeadInterest $leadinterest)
    {
        $leadinterest->update([
            "name" => $request->name ?? $leadinterest->name,
            "description" => $request->description ?? $leadinterest->description
        ]);

        return redirect()->route('leadinterests.index');
    }

    public function destroy(LeadInterest $leadinterest)
    {
        $leadinterest->delete();

        return redirect()->route('leadinterests.index');
    }


    public function show(leadInterest $leadInterest)
    {
        //
    }
}
