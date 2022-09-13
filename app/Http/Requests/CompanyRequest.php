<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name' => 'required',
            'phone_number' => 'required',
            'company_type_id' => 'required|exists:company_types,id',
            'address' => 'required',
            'city' => 'nullable',
            'company_area_id' => 'required|exists:company_areas,id',
            'postal_code' => 'nullable',
            'number_of_employees' => 'nullable',
            'annual_revenue' => 'nullable',
            'time_zone' => 'nullable',
            'description' => 'nullable',
            'linkedin_company' => 'nullable',
        ];
    }

    public function withValidator($validator)
    {
       if($validator->fails()) {
           return redirect()->route('companies.create')->with('error', $validator->errors())->withInput();
       }
    }
}
