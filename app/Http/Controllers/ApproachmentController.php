<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Status;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Approachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApproachmentController extends Controller
{
    //
    public function index()
    {
        $approachments = Approachment::with('contact', 'status')->get();
        return view("approachments.index", compact("approachments"));
    }

    public function create()
    {
        $contacts = Contact::get();
        $activities = Activity::get();
        $statuses = Status::where("model", "=", "approachment")->get();

        return view('approachments.create', compact("contacts", "activities", "statuses"));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'contact_id' => 'nullable',
            'activity_id' => 'nullable',
            'date' => 'nullable',
            'note' => 'nullable',
        ]);

        try {
            $approachment = Approachment::create($validation->validated());
            $approachment->status()->sync($request->status);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }  
        
        

        return redirect()->route('approachments.index');
    }

    public function edit(Approachment $approachment)
    {      
        return view("approachments.edit", compact("approachment"));
    }

    public function update(Request $request, Approachment $approachment)
    {
        $update = $approachment ->update([
            "date"=>$request->date ?? $approachment->date,
            "note"=>$request->note ?? $approachment->note,
        ]);
        if ($update) {
            return to_route("approachments.index")->with('success', 'Approachment berhasil diubah!');
        }
        return to_route("approachments.edit", $approachment->id)->with('error', 'Approachment gagal diubah!');
    }

    public function destroy(Approachment $approachment)
    {
        $deleted = $approachment->delete();

        if ($deleted) {
            return to_route("approachments.index")->with('success', 'Approachment berhasil dihapus!');
        }
        return to_route("approachments.index")->with('error', 'Approachment gagal dihapus!');
    }




}
