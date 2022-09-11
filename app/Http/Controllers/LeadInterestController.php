<?php

namespace App\Http\Controllers;

use App\Models\LeadInterest;
use Illuminate\Http\Request;

class LeadInterestController extends Controller
{
    
    public function index()
    {
        $leadInterests = leadInterest::get();
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

    public function edit($id)
    {
        $leadInterest = leadInterest::findOrFail($id);

        return view("leadinterests.edit", compact("leadInterest"));
    }

    public function update(Request $request, $id)
    {
        $leadInterest = leadInterest::findOrFail($id);
        $leadInterest->update([
            "name" => $request->name ?? $leadInterest->name,
            "description" => $request->description ?? $leadInterest->description
        ]);

        return redirect()->route('leadinterests.index');
    }

    public function destroy($id)
    {
        $leadInterest = leadInterest::findOrFail($id);
        $leadInterest->delete();

        return redirect()->route('leadinterests.index');
    }


    public function show(leadInterest $leadInterest)
    {
        //
    }
}
