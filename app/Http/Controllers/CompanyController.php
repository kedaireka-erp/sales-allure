<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyArea;
use App\Models\CompanyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        // $companies = Company::all();
        // $companies = DB::table('companies')
        //     ->join('company_types', 'companies.company_type_id', '=', 'company_types.id')
        //     ->join('company_areas', 'companies.company_area_id', '=', 'company_areas.id')
        //     ->select('companies.*', 'company_types.name as type', 'company_areas.name as area')
        //     ->orderBy('companies.id')
        //     ->get();

        $companies = Company::with(['company_type'], ['company_area'])->get();
        
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $types = CompanyType::all();
        $areas = CompanyArea::all();
        return view('companies.create', compact('types', 'areas'));

        // return view('companies.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'phone_number' => 'required',
        //     'address' => 'required',
        //     'description' => 'required',
        // ]);
        
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required',
            'company_type_id' => 'required',
            'address' => 'required',
            'city' => 'nullable',
            'company_area_id' => 'required',
            'postal_code' => 'nullable',
            'number_of_employees' => 'nullable',
            'annual_revenue' => 'nullable',
            'time_zone' => 'nullable',
            'description' => 'nullable',
            'linkedin_company' => 'nullable',
        ]);
        Company::create($validated->validated());

        // Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company berhasil dibuat!');
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        $companies = Company::with('company_type', 'company_area')->get();
        return view('companies.detail', compact('company', 'companies'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $companies = Company::all();
        $company_types = CompanyType::get();
        $company_areas = CompanyArea::get();
        // return view('companies.edit', compact('company', 'companies'));
        return view('companies.edit', compact('company', 'companies', 'company_types', 'company_areas'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        // $company->update($request->all());
        $company->update([
            'name' => $request->name ?? $company->name,
            'phone_number' => $request->phone_number ?? $company->phone_number,
            'company_type_id' => $request->company_type_id ?? $company->company_type_id,
            'address' => $request->address ?? $company->address,
            'city' => $request->city ?? $company->city,
            'company_area_id' => $request->company_area_id ?? $company->company_area_id,
            'postal_code' => $request->postal_code ?? $company->postal_code,
            'number_of_employees' => $request->number_of_employees ?? $company->number_of_employees,
            'annual_revenue' => $request->annual_revenue ?? $company->annual_revenue,
            'time_zone' => $request->time_zone ?? $company->time_zone,
            'description' => $request->description ?? $company->description,
            'linkedin_company' => $request->linkedin_company ?? $company->linkedin_company,
        ]);

        return to_route('companies.index')->with('success', 'Company berhasil diubah!');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        
        return to_route("companies.index")->with('success', 'Company berhasil dihapus!');
    }
}
