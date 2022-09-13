<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
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
        ];
    }
}
