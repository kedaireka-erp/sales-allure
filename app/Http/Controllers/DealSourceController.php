<?php

namespace App\Http\Controllers;

use App\Models\DealSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealSources = DealSource::all();

        return view('deal_sources.index', compact('dealSources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deal_sources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dealSources = DealSource::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('deal_sources.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DealSource  $dealSource
     * @return \Illuminate\Http\Response
     */
    public function show(DealSource $dealSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DealSource  $dealSource
     * @return \Illuminate\Http\Response
     */
    public function edit(DealSource $dealSource)
    {
        return view('deal_sources.edit', compact('dealSource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DealSource  $dealSource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DealSource $dealSource)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
        'deskripsi' => 'nullable|max:300'
    ]);
    $dealSource->update($validator->validate());

        return to_route('deal_sources.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DealSource  $dealSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(DealSource $dealSource)
    {
        $dealSource->delete();

        return redirect()->route('deal_sources.index');
    }
}
