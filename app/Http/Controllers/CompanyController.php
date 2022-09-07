<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company berhasil dibuat!');
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company, $id)
    {
        $company = Company::findOrFail($id);
        $companies = Company::all();
        return view('companies.edit', compact('company', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return to_route('companies.index')->with('success', 'Company berhasil diubah!');
    }

    public function destroy(Company $company, $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        
        return to_route("companies.index")->with('success', 'Company berhasil dihapus!');
    }
}
