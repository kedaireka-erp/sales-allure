<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApproachmentRequest extends FormRequest
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
            'contact_id' => 'nullable',
            'activity_id' => 'nullable',
            'status_id' => 'nullable',
            'date' => 'nullable',
            'note' => 'nullable',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return back()->with('error', $validator->errors())->withInput();
        }
    }

}
