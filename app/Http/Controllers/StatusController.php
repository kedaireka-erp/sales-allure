<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();

        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
        $statuses = Status::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('status.index')
            ->with('success', 'Status berhasil dibuat!');
    }

    public function edit(Status $status)
    {
        return view('status.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deskripsi' => 'nullable|max:300',
        ]);
        $status->update($validator->validate());

        return to_route('status.index');
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('status.index');
    }
}
