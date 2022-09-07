<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Quotation;
use App\Models\DealSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::with('Status','DealSource')->paginate();

        return view('quotation.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status=Status::all();
        $deal_source=DealSource::all();
        return view('quotation.create', compact('status','deal_source'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quotations = Quotation::create([
            'no_quotation' => $request->no_quotation,
            'deal_source_id' => $request->deal_source_id,
            'status_id' => $request->status_id,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('quotation.index')->with('success', 'Quotation berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        return view('quotation.detail', compact('quotation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        $status=Status::get();
        $deal_source=DealSource::get();

        return view('quotation.edit', compact('quotation','status','deal_source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        $validator = Validator::make($request->all(), [
            'no_quotation' => 'required',
            'deal_source_id' => 'required',
            'status_id' => 'required',
        'keterangan' => 'nullable|max:300'
    ]);
    $quotation->update($validator->validate());

        return to_route('quotation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        $quotation->delete();

        return to_route('quotation.index');
    }

    public function quotationToFppp(Quotation $quo){
        $quotations=Quotation::all();
        return view('fppps.create', compact('quotations','quo'));

    }
}
