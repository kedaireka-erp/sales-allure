<?php

namespace App\Http\Controllers;

use App\Models\CompanyArea;
use Illuminate\Http\Request;

class CompanyAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_areas = CompanyArea::all();
        
        return view('company_areas.index', compact('company_areas'));
    }
   
    public function create()
    {
        return view('company_areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        CompanyArea::create($request->all());

        return redirect()->route('company_areas.index')->with('success', 'Company Area berhasil dibuat!');
    }
 
    public function show(CompanyArea $companyArea)
    {
        //
    }

    public function edit($id)
    {
        $company_area = CompanyArea::findOrFail($id);

        $company_areas = CompanyArea::all();
       
        return view('company_areas.edit', compact('company_area', 'company_areas'));
    }

    public function update(Request $request, $id)
    {
        $company_area = CompanyArea::findOrFail($id);

        $company_area->update([
            'name' => $request->name ?? $company_area->name,
            'description' => $request->description ?? $company_area->description,
        ]);

        return to_route('company_areas.index')->with('success', 'Company Area berhasil diubah!');
    }

    public function destroy($id)
    {
        $company_area = CompanyArea::findOrFail($id);
        
        $company_area->delete();
        
        return to_route("company_areas.index")->with('success', 'Company Area berhasil dihapus!');
    }
}
