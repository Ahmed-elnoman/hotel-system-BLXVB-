<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestValidatetion extends FormRequest
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

            'First_name' => 'required | string ',
            'Last_name'  => 'required | string',
            'gender'     => 'required',
            'phone'      => 'required | integer',
            'email'      => 'required ',
            'passwors'   => 'required',
            'passPortNo' => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'conutry'    => 'required',
            'number_of_person' => 'required',
            'age' => 'required'

        ];
    }
}
