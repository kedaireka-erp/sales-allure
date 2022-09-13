<?php

namespace App\Http\Controllers\FPPP;

use App\Models\File;
use App\Models\Fppp;
use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FpppRequest;
use App\Models\AttachmentFppp;

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
            'quotations' => $fppp->quotations
        ]);
    }

    public function create()
    {
        $fppps = Fppp::get();
        $quotations = Quotation::whereHas('Status', function ($query) {
            return $query->where('name', 'won');
        })->get();
        return view("fppps.create", compact("fppps", "quotations"));
    }

    public function store(FpppRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();
        $create = Fppp::create($validated);
        

        foreach($request->file('attachment') as $att){
            $ori_name = $att->getClientOriginalName();
            AttachmentFppp::create([
                'name' => $ori_name,
                'path' => 'public/fppp/'.$ori_name,
                'fppp_id' => $create->id
            ]);
        }

        if ($create) {
            return to_route("fppps.index")->with('success', 'FPPP dengan Nomor ' . $create->fppp_no . '  berhasil dibuat!');
        }
        return to_route("fppps.create")->with('error', 'FPPP gagal dibuat!');
    }


    public function edit($id)
    {
        $fppp = Fppp::findOrFail($id);
        $fppps = Fppp::all();
        $quotations = Quotation::whereHas('Status', function ($query) {
            return $query->where('name', 'won');
        })->get();

        return view("fppps.edit", compact("fppp", "fppps", "quotations", "files"));
    }

    public function update(FpppRequest $request, $id)
    {
        $fppp = Fppp::findOrFail($id);
        $validated = $request->validated();
        $update = $fppp->update($validated);
        if ($update) {
            return to_route("fppp.index")->with('success', 'FPPP dengan Nomor ' . $update->fppp_no . '  berhasil diubah!');
        }
        return to_route("fppp.edit", $fppp->id)->with('error', 'FPPP gagal diubah!');
    }

    public function destroy($id)
    {
        $fppp = Fppp::findOrFail($id);
        $deleted=$fppp->delete();

        if($deleted){
            return to_route("fppps.index")->with('success', 'FPPP dengan Nomor ' . $fppp->fppp_no . '  berhasil dihapus!');
        }
        return to_route("fppps.index")->with('error', 'FPPP gagal dihapus!');
        
    }
}
