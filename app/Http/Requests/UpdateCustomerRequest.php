<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'img' => 'file',
            'name' => 'required|string|min:3',
            'email'  => 'required|email',
            'phone' => 'required|min:11|numeric',
            'street' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'postcode' => 'required|digits:5',
            'birthdate' => 'required|date'


        ];
    }
}
