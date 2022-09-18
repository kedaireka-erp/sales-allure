<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\CompanyArea;
use App\Models\CompanyType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::with(['company_area', 'company_type'])->latest()->paginate(10);

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $types = CompanyType::all();
        
        $areas = CompanyArea::all();

        return view('companies.create', compact('types', 'areas'));
    }

    public function store(CompanyRequest $request)
    {
  
        $validated = $request->validated();
        try {
            Company::create($validated);
            
        } catch (Exception $e) {
            return redirect()->route('companies.create')->with('error', $e->getMessage());
        }

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function show(Company $company)
    {

        $companies = Company::with('company_type', 'company_area')->get();
        
        return view('companies.detail', compact('company', 'companies'));
    }

    public function edit(Company $company)
    {

        $companies = Company::all();

        $company_types = CompanyType::get();

        $company_areas = CompanyArea::get();

        return view('companies.edit', compact('company', 'companies', 'company_types', 'company_areas'));
    }

    public function update(CompanyRequest $request, Company $company)
    {

        $validated = $request->validated();
        
        try {
            $company->update($validated);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');

    }

    public function destroy(Company $company)
    {
        $deleted = $company->delete();


        if ($deleted) {
            return to_route("companies.index")->with('success', 'Company berhasil dihapus!');
        }
        return to_route("companies.index")->with('error', 'Company gagal dihapus!');
    }
}
