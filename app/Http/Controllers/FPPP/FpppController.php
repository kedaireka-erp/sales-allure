<?php

namespace App\Http\Controllers\FPPP;

use App\Models\Fppp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quotation;

class FpppController extends Controller
{
    public function index()
    {
        $fppps = Fppp::with("quotation")->orderBy('id', 'desc')->paginate(20);
        return view("fppps.index", compact("fppps"));
    }

    public function show()
    {
        $fppps = Fppp::with("quotation")->get();

        return view("fppps.detail", compact("fppps"));
    }

    public function create()
    {
        $quotations=Quotation::get();
        return view("fppps.create", compact("quotations"));
    }

    public function store(Request $request)
    {
        $fppp = Fppp::create([
            // "fppp_no" => $request->fppp_no,
            "fppp_type" => $request->fppp_type,
            "production_phase" => $request->production_phase,
            "quotation_id" => $request->quotation_id,
            "order_status" => $request->order_status,
            "production_time" => $request->production_time,
            "color" => $request->color,
            "glass" => $request->glass,
            "glass_type" => $request->glass_type,
            "retrieval_deadline" => $request->retrieval_deadline,
            "box_usage" => $request->box_usage,
            "sealant_usage" => $request->sealant_usage,
            "delivery_to_expedition" => $request->delivery_to_expedition,
            "note" => $request->note,
        ]);

        return to_route("fppps.index")->with('success', 'FPPP dengan Nomor '.$fppp->fppp_no.'  berhasil diubah!');
    }


    public function edit($id)
    {
        $fppp = Fppp::findOrFail($id);
        $fppps = Fppp::all();
        $quotations = Quotation::get();

        return view("fppps.edit", compact("fppp", "fppps", "quotations"));
    }

    public function update(Request $request, $id)
    {
        $fppp = Fppp::findOrFail($id);
        $fppp->update([
            // "fppp_no" => $request->fppp_no ?? $fppp->fppp_no,
            "fppp_type" => $request->fppp_type ?? $fppp->fppp_type,
            "production_phase" => $request->production_phase ?? $fppp->production_phase,
            "quotation_id" => $request->quotation_id ?? $fppp->quotation->id,
            "order_status" => $request->order_status ?? $fppp->order_status,
            "production_time" => $request->production_time ?? $fppp->production_time,
            "color" => $request->fppp_no ?? $fppp->color,
            "glass" => $request->glass ?? $fppp->glass,
            "glass_type" => $request->glass_type ?? $fppp->glass_type,
            "retrieval_deadline" => $request->retrieval_deadline ?? $fppp->retrieval_deadline,
            "box_usage" => $request->box_usage ?? $fppp->box_usage,
            "sealant_usage" => $request->sealant_usage ?? $fppp->sealant_usage,
            "delivery_to_expedition" => $request->delivery_to_expedition ?? $fppp->delivery_to_expedition,
            "note" => $request->note ?? $fppp->note,
        ]);

        return to_route("fppps.index")->with('success', 'FPPP dengan Nomor '.$fppp->fppp_no.'  berhasil diubah!');
    }


    public function destroy($id)
    {
        $fppp = Fppp::findOrFail($id);
        $fppp->delete();

        return to_route("fppps.index")->with('success', 'FPPP dengan Nomor '.$fppp->fppp_no.'  berhasil dihapus!');
    }
}
