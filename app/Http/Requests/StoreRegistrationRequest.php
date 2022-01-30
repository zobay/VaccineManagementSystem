<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nid' => 'required',
            'dob' => 'required',
            'center_id' => 'required|exists:App\Models\Center,id',
            'email' => 'required',
            'name' => 'nullable',
            'phone' => 'required'
        ];
    }
}
