<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDataRequest extends FormRequest
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
            'name'      => 'required|min:3',
            'email'     => 'required|email',
            'phone'     => 'numeric',
            'street'    => 'string|min:3',
            'city'      => 'string|min:3',
            'postcode'  => 'digits:5',
            'birthdate' => 'nullable|date',
        ];
    }
}
