<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyTypeController extends Controller
{
    
    public function index()
    {
        $company_types = CompanyType::all();
       
        return view('company_types.index', compact('company_types'));
    }
   
    public function create()
    {
        return view('company_types.create');
    }
  
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'description' => 'nullable',
        ]);

        if($validation->fails())
        {
            return back()->withErrors($validation)->with('error', 'Company Type gagal dibuat!')->withInput();
        }
        else
        {
            $create = CompanyType::create($request->all());
            
            if($create)
            {
                return redirect()->route('company_types.index')->with('success', 'Company Type berhasil dibuat!');
            }
            else
            {
                return redirect()->route('company_types.create')->with('error', 'Company Type gagal dibuat!');
            }
        }
    }
   
    public function show(CompanyType $companyType)
    {
        //
    }
  
    public function edit($id)
    {
        $company_type = CompanyType::findOrFail($id);

        $company_types = CompanyType::all();
        
        return view('company_types.edit', compact('company_type', 'company_types'));
    }
     
    public function update(Request $request, $id)
    {
        $company_type = CompanyType::findOrFail($id);

        $validation = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'description' => 'nullable',
        ]);

        if($validation->fails())
        {
            return back()->withErrors($validation)->with('error', 'Company Type gagal diubah!')->withInput();
        }
        else
        {
            $update = $company_type->update($request->all());
            
            if($update)
            {
                return redirect()->route('company_types.index')->with('success', 'Company Type berhasil diubah!');
            }
            else
            {
                return redirect()->route('company_types.edit', $id)->with('error', 'Company Type gagal diubah!');
            }
        }
    }

    public function destroy($id)
    {
        $company_type = CompanyType::findOrFail($id);
        
        $deleted = $company_type->delete();
        
        if($deleted)
        {
            return redirect()->route('company_types.index')->with('success', 'Company Type berhasil dihapus!');
        }
        else
        {
            return redirect()->route('company_types.index')->with('error', 'Company Type gagal dihapus!');
        }
    }
}
