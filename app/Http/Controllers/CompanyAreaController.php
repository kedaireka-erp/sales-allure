<?php

namespace App\Http\Controllers;

use App\Models\CompanyArea;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyAreaController extends Controller
{
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
        $validated = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'description' => 'nullable',
        ]);

        if($validated->fails())
        {
            return back()->withErrors($validated)->with('error', 'Company Area gagal dibuat!')->withInput();
        }
        else
        {
            $create = CompanyArea::create($request->all());
            
            if($create)
            {
                return redirect()->route('company_areas.index')->with('success', 'Company Area berhasil dibuat!');
            }
            else
            {
                return redirect()->route('company_areas.create')->with('error', 'Company Area gagal dibuat!');
            }
        }
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

        $validated = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'description' => 'nullable',
        ]);

        if($validated->fails())
        {
            return back()->withErrors($validated)->with('error', 'Company Area gagal diubah!')->withInput();
        }
        else
        {
            $update = $company_area->update($request->all());
            
            if($update)
            {
                return redirect()->route('company_areas.index')->with('success', 'Company Area berhasil diubah!');
            }
            else
            {
                return redirect()->route('company_areas.edit')->with('error', 'Company Area gagal diubah!');
            }
        }
}

    public function destroy($id)
    {
        $company_area = CompanyArea::findOrFail($id);
        
        $deleted = $company_area->delete();
        
        if($deleted)
        {
            return redirect()->route('company_areas.index')->with('success', 'Company Area berhasil dihapus!');
        }
        else
        {
            return redirect()->route('company_areas.index')->with('error', 'Company Area gagal dihapus!');
        }
    }
}
