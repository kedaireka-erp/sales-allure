<?php

namespace App\Http\Controllers\FPPP;

use App\Models\File;
use App\Models\Fppp;
use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FpppController extends Controller
{
    public function index()
    {
        $fppps = Fppp::with("quotation")->orderBy('id', 'desc')->paginate(20);
        return view("fppps.index", compact("fppps"));
    }

    public function show(Fppp $fppp)
    {
        return view('fppps.detail', [
            'fppp' => $fppp,
            'quotations'=> $fppp->quotations
        ]);

    }

    public function create()
    {
        $fppps=Fppp::get();
        $quotations=Quotation::whereHas('Status', function($query){
            return $query->where('name', 'won');
        })->get();
        $files=File::get();
        return view("fppps.create", compact("fppps", "quotations"));
    }

    public function store(Request $request)
    {
        $fppp = Fppp::create([
            // "fppp_no" => $request->fppp_no,
            "fppp_type" => $request->fppp_type,
            "production_phase" => $request->production_phase,
            "quotation_id" => $request->quotation_id,
            "order_status" => $request->order_status,
            "fppp_revisino" => $request->fppp_revisino,
            "fppp_keterangan" => $request->fppp_keterangan,
            "production_time" => $request->production_time,
            "color" => $request->color,
            "glass" => $request->glass,
            "glass_type" => $request->glass_type,
            "retrieval_deadline" => $request->retrieval_deadline,
            "box_usage" => $request->box_usage,
            "sealant_usage" => $request->sealant_usage,
            "delivery_to_expedition" => $request->delivery_to_expedition,
            "note" => $request->note,
            "file_id" => $request->file_id,
        ]);

        return to_route("fppps.index")->with('success', 'FPPP dengan Nomor '.$fppp->fppp_no.'  berhasil dibuat!');
    }


    public function edit($id)
    {
        $fppp = Fppp::findOrFail($id);
        $fppps = Fppp::all();
        $quotations=Quotation::whereHas('Status', function($query){
            return $query->where('name', 'won');
        })->get();
        $files=File::get();

        return view("fppps.edit", compact("fppp", "fppps", "quotations", "files"));
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
            "fppp_revisino" => $request->fppp_revisino ?? $fppp->fppp_revisino,
            "fppp_keterangan" => $request->fppp_keterangan ?? $fppp->fppp_keterangan,
            "production_time" => $request->production_time ?? $fppp->production_time,
            "color" => $request->fppp_no ?? $fppp->color,
            "glass" => $request->glass ?? $fppp->glass,
            "glass_type" => $request->glass_type ?? $fppp->glass_type,
            "retrieval_deadline" => $request->retrieval_deadline ?? $fppp->retrieval_deadline,
            "box_usage" => $request->box_usage ?? $fppp->box_usage,
            "sealant_usage" => $request->sealant_usage ?? $fppp->sealant_usage,
            "delivery_to_expedition" => $request->delivery_to_expedition ?? $fppp->delivery_to_expedition,
            "note" => $request->note ?? $fppp->note,
            "file_id" => $request->file_id ?? $fppp->file_id,
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
