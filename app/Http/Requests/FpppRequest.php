<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FpppRequest extends FormRequest
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
            //
            "fppp_type" => 'nullable',
            "number" => 'nullable',
            "production_phase" => 'nullable',
            "quotation_id" => 'required',
            "order_status" => 'nullable',
            "fppp_revisino" => 'nullable',
            "fppp_keterangan" => 'nullable',
            "production_time" => 'nullable',
            "color" => 'nullable',
            "glass" => 'nullable',
            "glass_type" => 'nullable',
            "retrieval_deadline" => 'nullable',
            "box_usage" => 'nullable',
            "sealant_usage" => 'nullable',
            "delivery_to_expedition" => 'nullable',
            "note" => 'nullable',
            "files" => 'nullable',

        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->route('fppps.create')->with('error', $validator->errors())->withInput();
        }
    }

}
