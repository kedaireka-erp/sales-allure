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

        return redirect()->route('company_types.index')
            ->with('success', 'CompanyType created successfully.');
    }

    
    public function show(CompanyType $companyType)
    {
        //
    }

    
    public function edit($id)
    {
        $company_type = CompanyType::findOrFail($id);
        $company_types = CompanyType::all();
        return view('company_types.edit', compact('company_type'));
    }
    

    
    public function update(Request $request, $id)
    {

        $company_type = CompanyType::findOrFail($id);
        $company_type->update($request->all());

        return to_route('company_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyType $companyType)
    {
        //
    }
}
