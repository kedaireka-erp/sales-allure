<?php

namespace App\Http\Controllers\FPPP;

use App\Models\Fppp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FpppController extends Controller
{
    public function index(){
        $fppps = Fppp::orderBy('production_phase', 'desc')->paginate(20);
        return view("fppps.index", compact("fppps"));
    }

    public function show(){
        $fppps = Fppp::all();

        return view("fppps.detail", compact("fppps"));
    }

    public function getData(){
        $fppps = Fppp::all();
        
        return json_encode($fppps);
    }

    public function create(){
        return view("fppps.create");
    }

    public function store(Request $request){
        $fppps = Fppp::create([
            "fppp_no"=>$request->fppp_no,
            "fppp_type"=>$request->fppp_type,
            "production_phase"=>$request->production_phase,
            "order_status"=>$request->order_status,
            "production_time"=>$request->production_time,
            "color"=>$request->color,
            "glass"=>$request->glass,
            "glass_type"=>$request->glass_type,
            "retrieval_deadline"=>$request->retrieval_deadline,
            "box_usage"=>$request->box_usage,
            "sealant_usage"=>$request->sealant_usage,
            "delivery_to_expedition"=>$request->delivery_to_expedition,
            "note"=>$request->note,
        ]);

        return to_route("fppps.index")->with('success', 'FPPP berhasil dibuat!');
    }


    public function edit($id){
        $fppp = Fppp::findOrFail($id);
        $fppps = Fppp::all();
        
        return view("fppps.edit", compact("fppp", "fppps"));

    }

    public function update(Request $request, $id){
        $fppp = Fppp::findOrFail($id);
        $fppp ->update([
            "fppp_no"=>$request->fppp_no?? $fppp->fppp_no,
            "fppp_type"=>$request->fppp_type?? $fppp->fppp_type,
            "production_phase"=>$request->production_phase?? $fppp->production_phase,
            "order_status"=>$request->order_status?? $fppp->order_status,
            "production_time"=>$request->production_time?? $fppp->production_time,
            "color"=>$request->fppp_no?? $fppp->color,
            "glass"=>$request->glass?? $fppp->glass,
            "glass_type"=>$request->glass_type?? $fppp->glass_type,
            "retrieval_deadline"=>$request->fppp_no?? $fppp->retrieval_deadline,
            "box_usage"=>$request->box_usage?? $fppp->box_usage,
            "sealant_usage"=>$request->sealant_usage?? $fppp->sealant_usage,
            "delivery_to_expedition"=>$request->delivery_to_expedition?? $fppp->delivery_to_expedition,
            "note"=>$request->note?? $fppp->note,
        ]);

        return to_route("fppps.index")->with('success', 'FPPP berhasil diubah!');
    }


    public function destroy($id){
        $fppp = Fppp::findOrFail($id);
        $fppp->delete();
        
        return to_route("fppps.index")->with('success', 'FPPP berhasil dihapus!');
    }


}
