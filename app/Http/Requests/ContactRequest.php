<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact_type_id'=> 'required|exists:contact_types,id' ,
            'lead_source_id' => 'required|exists:lead_sources,id',
            'lead_status_id' => 'required|exists:lead_statuses,id',
            'name' =>'required',
            'email' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'note' =>'required',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return back()->with('error', $validator->errors())->withInput();
        }
    }
}
