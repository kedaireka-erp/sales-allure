<?php

namespace App\Http\Controllers\FPPP;

use Exception;
use App\Models\File;
use App\Models\Fppp;
use App\Models\Quotation;
use App\Models\TempFiles;
use App\Exports\FpppExport;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use App\Models\AttachmentFppp;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\FpppRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FpppController extends Controller
{
    public function index()
    {
        $fppps = Fppp::with("quotation")->orderBy('created_at', 'desc')->orderBy('quotation_id', 'desc')->paginate(20);
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

        if (Auth::user()->tempFiles) {
            foreach (Auth::user()->tempFiles as $tempFile) {
                AttachmentFppp::create([
                    'name' => $tempFile->name,
                    'path' => 'fppps/attachments/' . $tempFile->name,
                    'fppp_id' => $create->id
                ]);
                Storage::move(
                    'public/fppps/attachments/temp/' . $tempFile->name,
                    'public/fppps/attachments/' . $tempFile->name
                );
            }
        }

        TempFiles::where('user_id', Auth::id())->delete();

        if ($create) {
            return to_route("fppps.index")->with('success', 'FPPP dengan Nomor ' . $create->fppp_no . '  berhasil dibuat!');
        }
        return to_route("fppps.create")->with('error', 'FPPP gagal dibuat!');
    }

    public function edit(Fppp $fppp)
    {      
        $fppps = Fppp::get();
        $quotations = Quotation::whereHas('Status', function ($query) {
            return $query->where('name', 'won');
        })->get();

        return view("fppps.edit", compact("fppp", "fppps", "quotations"));
    }

    public function update(FpppRequest $request, $id)
    {
        $fppp = Fppp::findOrFail($id);
        $validated = $request->validated();
        $update = $fppp->update($validated);
        if ($update) {
            return to_route("fppps.index")->with('success', 'FPPP dengan Nomor ' . $fppp->fppp_no . '  berhasil diubah!');
        }
        return to_route("fppps.edit", $fppp->id)->with('error', 'FPPP gagal diubah!');
    }

    public function destroy($id)
    {
        $fppp = Fppp::findOrFail($id);
        $deleted = $fppp->delete();

        if ($deleted) {
            return to_route("fppps.index")->with('success', 'FPPP dengan Nomor ' . $fppp->fppp_no . '  berhasil dihapus!');
        }
        return to_route("fppps.index")->with('error', 'FPPP gagal dihapus!');
    }

    public function storeAttachments(Request $request)
    {

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = now()->timestamp . '-' . $image->getClientOriginalName();

            try {
                Storage::putFileAs('public/fppps/attachments/temp/', $image, $imageName);
                TempFiles::firstOrCreate([
                    'name' => $imageName,
                    'user_id' => Auth::id()
                ]);
            } catch (Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }

            return response()->json(['success' => $imageName]);
        }
    }

    public function deleteTempAttachments(Request $request)
    {
        if ($request->header("_method") == "DELETE") {
            $id = $request->getContent();
            $tempFile = TempFiles::findOrFail($id);
            $tempFile->delete();
            return response()->json(['success' => 'success']);
        }
        return response()->json(['error' => 'something wrong']);
    }

    public function export()
    {
        return Excel::download(new FpppExport, 'fppps.xlsx');
    }

    public function toPdf(Fppp $fppp){
        $pdf = Pdf::loadView('fppps.pdf', compact('fppp'));
        return $pdf->download($fppp->fppp_no.'.pdf');
    }
    
}
