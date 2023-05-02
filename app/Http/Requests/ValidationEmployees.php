<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationEmployees extends FormRequest
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

            'first_name' => 'required | string ',
            'last_name'  => 'required | string ',
            'address'    => 'required | string ',
            'phone'      => 'required ',
            'Salary'     => 'required',
            'gender'     => 'required',
            'Department' => 'required ',
            'Position'   => 'required ',
        ];
    }

    public function messages()
    {

       return [

         // First Name filed
            'first_name.required' => 'the first name is required',
            'first_name.string'   => 'the first name should be string',

         // Last Name filed
            'last_name.required' => 'the last name is required',
            'last_name.string'   => 'the last name should be string',

         // Address filed
            'address.required' => 'the address is required',
            'address.string'   => 'the address should be string',

        // Phone filed
            'phone.requset'  => 'the phone the request',
            // 'phone.integer'   => 'the phone should be numbers',

        // Phone filed
            'Salary.requset'  => 'the Salary the request',
            // 'Salary.integer'   => 'the Salary should be numbers',

        // Department filed
           'Department.required' => 'the first Department is required',

        // Gender filed
        'gender.required' => 'the first gender is required',

        // Position filed
        'Position.required' => 'the first Position is required',

       ];
    }
}
