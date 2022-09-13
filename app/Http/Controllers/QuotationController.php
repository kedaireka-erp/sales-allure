<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Quotation;
use App\Models\DealSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = Quotation::with('Status', 'DealSource')->get();

        return view('quotation.index', compact('quotations'));
    }

    public function create()
    {
        $status = Status::all();
        $deal_source = DealSource::all();
        return view('quotation.create', compact('status', 'deal_source'));
    }

    public function store(Request $request)
    {
        $quotation = Quotation::create([
            'no_quotation' => $request->no_quotation,
            'deal_source_id' => $request->deal_source_id,
            'status_id' => $request->status_id,
            'keterangan' => $request->keterangan,
        ]);

        if ('$quotation') {
            return redirect()
                ->route('quotation.index')
                ->with('success', 'Quotation dengan Nomor ' . $quotation->no_quotation . '  berhasil dibuat!');
        } else {
            return redirect()
                ->route('quotation.create')
                ->with('error', 'Quotation gagal dibuat!');
        }
    }

    public function show(Quotation $quotation)
    {
        return view('quotation.detail', compact('quotation'));
    }

    public function edit(Quotation $quotation)
    {
        $status = Status::get();
        $deal_source = DealSource::get();

        return view('quotation.edit', compact('quotation', 'status', 'deal_source'));
    }

    public function update(Request $request, Quotation $quotation)
    {
        $validator = Validator::make($request->all(), [
            'no_quotation' => 'required',
            'deal_source_id' => 'required',
            'status_id' => 'required',
            'keterangan' => 'nullable|max:300',
        ]);
        $quotation->update($validator->validate());

        if ($quotation) {
            return to_route('quotation.index')->with('success', 'Quotation dengan Nomor ' . $quotation->no_quotation . '  berhasil diubah!');
        } else {
            return to_route('quotation.edit', $quotation)->with('error', 'Quotation dengan Nomor ' . $quotation->no_quotation . '  gagal diubah!');
        }
    }

    public function destroy(Quotation $quotation)
    {
        $deleted = $quotation->delete();

        if ($deleted) {
            return to_route('quotation.index')->with('success', 'Quotation dengan Nomor ' . $quotation->no_quotation . '  berhasil dihapus!');
        } else {
            return to_route('quotation.index')->with('error', 'Quotation dengan Nomor ' . $quotation->no_quotation . '  gagal dihapus!');
        }
    }

    public function quotationToFppp(Quotation $quo)
    {
        $quotations = Quotation::all();
        return view('fppps.create', compact('quotations', 'quo'));
    }
}
