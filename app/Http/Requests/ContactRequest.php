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
            'contact_type_id'=> 'nullable' ,
            'lead_source_id' => 'nullable',
            'name' =>'required',
            'email' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'note' =>'required',
        ];
    }
}
