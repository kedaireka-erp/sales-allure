<?php

namespace App\Http\Controllers\FPPP;

use App\Models\File;
use App\Models\Fppp;
use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FpppRequest;
use App\Models\AttachmentFppp;
use Exception;

class FpppController extends Controller
{
    public function index()
    {
        $fppps = Fppp::with("quotation")->orderBy('created_at', 'desc')->orderBy('quotation_id', 'desc')->paginate(10);
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
        
        $validated = $request->validated();
        $create = Fppp::create($validated);
        

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
    
        try {
            $update = $fppp->update($validated);

        } catch (Exception $e) {
            return back()->with("error", $e->getMessage());
        }

        return redirect()->route("fppps.index")->with("success", "FPPP Berhasil Diupdate!");

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
