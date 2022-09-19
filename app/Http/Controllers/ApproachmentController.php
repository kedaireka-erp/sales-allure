<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Status;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Approachment;
use App\Models\Fppp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApproachmentController extends Controller
{
    //
    public function index()
    {
        $approachments = Approachment::with('contact', 'status')->latest()->paginate(10);
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
            'status_id' => 'nullable',
            'activity_id' => 'nullable',
            'date' => 'nullable',
            'note' => 'nullable',
        ]);

        if($validation->fails())
        {
            return back()->withErrors($validation)->with('error', 'Approachment gagal dibuat!')->withInput();
        }
        else
        {
            $create = Approachment::create($request->all());
            
            if($create)
            {
                return redirect()->route('approachments.index')->with('success', 'Approachment berhasil dibuat!');
            }
            else
            {
                return redirect()->route('approachments.create')->with('error', 'Approachment gagal dibuat!');
            }
        }

        // $validation = Validator::make($request->all(), [
        //     'contact_id' => 'nullable',
        //     'status_id' => 'nullable',
        //     'activity_id' => 'nullable',
        //     'date' => 'nullable',
        //     'note' => 'nullable',
        // ]);

        // try {
        //     $approachment = Approachment::create($validation->validated());
        //     $approachment->status()->sync($request->status);
        // } catch (Exception $e) {
        //     return back()->with('error', $e->getMessage());
        // }  
        
        // return redirect()->route('approachments.index');
    }

    public function edit($id)
    {      
        $approachment = Approachment::findOrFail($id);
        $contacts = Contact::get();
        $statuses = Status::where("model", "=", "approachment")->get();

        return view("approachments.edit", compact("approachment", "contacts", "statuses"));
    }

    public function update(Request $request, $id)
    {
        $approachment = Approachment::findOrFail($id);

        $update = $approachment ->update([
            'contact_id' => $request->contact_id ?? $approachment->contact_id,
            'status_id'=> $request->status_id ?? $approachment->status_id,
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
