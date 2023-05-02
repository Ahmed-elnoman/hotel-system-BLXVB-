<?php

namespace App\Http\Requests\Departments;

use Illuminate\Foundation\Http\FormRequest;

class ValidatoinDemarptment extends FormRequest
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
            'department_name'              => 'required | string | max:100 ',
            'department_description'       => 'required | string ',
            'total_employees'              => 'required | integer | min:5',
        ];
    }


    // return messages to pages
    public function messages()
    {
        return [

            // Department name field
                'department_name.requset'  => 'the name the request',
                'department_name.string'   => 'the field should be string',
                'department_name.max'      => 'the max Letter the 100',

            // Department descripations field
                'department_description.required'       => 'the descripation the request',
                'department_description.string'   => 'the field should be string',


            // Department total employees field
                'total_employees.requset'  => 'the employees the request',
                'total_employees.integer'   => 'the field should be numbers',
                'total_employees.min'      => 'the min employees should be bigger the 5',

        ];
    }
}
