<?php

namespace App\Http\Controllers;

use App\Models\DealSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealSourceController extends Controller
{
    public function index()
    {
        $dealSources = DealSource::latest()->paginate(10);

        return view('deal_sources.index', compact('dealSources'));
    }

    public function create()
    {
        return view('deal_sources.create');
    }

    public function store(Request $request)
    {
        $dealSources = DealSource::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('deal_sources.index');
    }

    public function edit(DealSource $dealSource)
    {
        return view('deal_sources.edit', compact('dealSource'));
    }

    public function update(Request $request, DealSource $dealSource)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deskripsi' => 'nullable|max:300',
        ]);
        $dealSource->update($validator->validate());

        return to_route('deal_sources.index');
    }

    public function destroy(DealSource $dealSource)
    {
        $dealSource->delete();

        return redirect()->route('deal_sources.index');
    }
}
