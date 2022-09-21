<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Fppp;
use App\Models\Status;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Approachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ApproachmentRequest;

class ApproachmentController extends Controller
{
    //
    public function index()
    {
        $approachments = Approachment::with('activity', 'contact', 'status')->orderBy('created_at', 'desc')->orderBy('contact_id', 'desc')->paginate(10);
        return view("approachments.index", compact("approachments"));
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
            return back()->with('success', 'Approachment berhasil diubah!');
        }
        return back()->with('error', 'FPPP gagal diubah!');

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
