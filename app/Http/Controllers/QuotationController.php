<?php

namespace App\Http\Controllers;

use App\Models\Fppp;
use App\Models\Status;
use App\Models\Contact;
use App\Models\Quotation;
use App\Models\DealSource;
use Illuminate\Http\Request;
use App\Exports\QuotationExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use PDF;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = Quotation::with('Status', 'DetailQuotation','Aplikator')->search(request(['search']))->status(request(['status']))->paginate(20);
        $statuses = Status::all();
        return view('quotation.index', compact('quotations', 'statuses'));
    }

    public function create()
    {
        $contacts = Contact::all();
        $status = Status::all();
        $deal_source = DealSource::all();
        return view('quotation.create', compact('contacts', 'status', 'deal_source'));
    }

    public function store(Request $request)
    {
        $quotation = Quotation::create([
            'no_quotation' => $request->no_quotation,
            'contact_id' => $request->contact_id,
            'deal_source_id' => $request->deal_source_id,
            'status_id' => $request->status_id,
            'alasan' => $request->alasan,
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
        $contacts = Contact::get();
        $status = Status::get();
        $deal_source = DealSource::get();

        return view('quotation.edit', compact('quotation', 'contacts', 'status', 'deal_source'));
    }

    public function update(Request $request, Quotation $quotation)
    {
        $validator = Validator::make($request->all(), [
            'no_quotation' => 'required',
            'contact_id' => 'required',
            'deal_source_id' => 'required',
            'status_id' => 'required',
            'alasan' => 'nullable|max:300',
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
        $fppps = Fppp::all();
        return view('fppps.create', compact('quotations', 'quo', 'fppps'));
    }

    public function export()
    {
        return Excel::download(new QuotationExport(), 'quotation.xlsx');
    }

    public function toPdf(Quotation $quotation) {
      $pdf = PDF::loadView('quotation.pdf', compact('quotation'));
      return $pdf->download('QUOTATION_'.$quotation->no_quotation.'.pdf');
    }
}
