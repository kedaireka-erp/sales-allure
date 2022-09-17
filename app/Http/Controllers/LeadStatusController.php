<?php

namespace App\Http\Controllers;

use App\Models\LeadStatus;
use Illuminate\Http\Request;

class LeadStatusController extends Controller
{
    public function index()
    {
        $leadStatuses = LeadStatus::get();
        return view('leadstatuses.index', compact('leadStatuses'));
    }

    public function create()
    {
        return view("leadstatuses.create");
    }

    public function store(Request $request)
    {
        $leadStatuses = LeadStatus::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('leadstatuses.index');
    }

    public function edit(LeadStatus $leadstatus)
    {

        return view("leadstatuses.edit", compact("leadstatus"));
    }

    public function update(Request $request, LeadStatus $leadstatus)
    {
        $leadStatus = $leadstatus;
        $leadStatus->update([
            "name" => $request->name ?? $leadStatus->name,
            "description" => $request->description ?? $leadStatus->description
        ]);

        return redirect()->route('leadstatuses.index');
    }

    public function destroy(LeadStatus $leadstatus)
    {
        $leadstatus->delete();

        return redirect()->route('leadstatuses.index');
    }


    public function show(LeadStatus $leadStatus)
    {
        //
    }
}
