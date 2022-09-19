<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function index()
    {
        $activities = Activity::latest()->paginate(10);
        return view("activities.index", compact("activities"));
    }

    public function create()
    {
        return view("activities.create");
    }

    public function store(Request $request)
    {
        $activities = Activity::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect()->route('activities.index');
    }

    public function edit($id)
    {
        $activity = Activity::findOrFail($id);

        return view("activities.edit", compact("activity"));
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->update([
            "name" => $request->name ?? $activity->name,
            "desc" => $request->desc ?? $activity->desc
        ]);

        return redirect()->route('activities.index');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index');
    }

    
}
