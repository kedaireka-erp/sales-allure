<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Fppp;
use App\Models\Status;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Approachment;
use Illuminate\Http\Request;
use App\Services\SearchService;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ApproachmentRequest;

class ApproachmentController extends Controller
{
    //
    public function index(Request $request)
    {
        $ss = new SearchService();
        $approachments = $ss->SearchApproachment($request);
        session()->flashInput($request->input());
        $statuses = Status::where("model", "=", "approachment")->get();
        $contacts = Contact::get();

        return view("approachments.index", compact("approachments", "statuses", "contacts"));
    }

    public function create()
    {
        $contacts = Contact::get();
        $activities = Activity::get();
        $statuses = Status::where("model", "=", "approachment")->get();

        return view('approachments.create', compact("contacts", "activities", "statuses"));
    }

    public function store(ApproachmentRequest $request)
    {
        $validated = $request->validated();
        $validated["user_id"] = auth()->user()->id;
        $create = Approachment::create($validated);

        if ($create) {
            return to_route("approachments.index")->with('success', 'Approachment berhasil dibuat!');
        }
        return to_route("approachments.create")->with('error', 'Approachment gagal dibuat!');

    }

    public function edit(Approachment $approachment)
    {
        $approachments = Approachment::get();
        $activities = Activity::get();
        $contacts = Contact::get();
        $statuses = Status::where("model", "=", "approachment")->get();

        return view("approachments.edit", compact("approachments", "approachment", "activities", "contacts", "statuses"));
    }

    public function update(ApproachmentRequest $request, $id)
    {
        $approachment = Approachment::findOrFail($id);
        $validated = $request->validated();
        $update = $approachment->update($validated);
        if ($update) {
            return  to_route("approachments.index")->with('success', 'Approachment berhasil diubah!');
        }
        return to_route("approachments.index")->with('error', 'FPPP gagal diubah!');

    }

    public function destroy($id)
    {
        $approachment = Approachment::findOrFail($id);
        $deleted = $approachment->delete();

        if ($deleted) {
            return to_route("approachments.index")->with('success', 'Approachment berhasil dihapus!');
        }
        return to_route("approachments.index")->with('error', 'Approachment gagal dihapus!');

    }
}
