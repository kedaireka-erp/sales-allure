<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Http\Request;

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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        CompanyType::create($request->all());

        return redirect()->route('company_types.index')->with('success', 'Company Type berhasil dibuat!');
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

        $company_type->update($request->all());

        return to_route('company_types.index')->with('success', 'Company Type berhasil diubah!');
    }

    public function destroy($id)
    {
        $company_type = CompanyType::findOrFail($id);
        
        $company_type->delete();
        
        return to_route("company_types.index")->with('success', 'Company Type berhasil dihapus!');
    }
}
