<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationEmployees;
use App\Models\Employees;
use RealRashid\SweetAlert\Facades\Alert;

class addEmployee extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ValidationEmployees $request)
    {
        // Employees::create([
        //     'firstName' => $request->first_name,
        //     'lastName'  => $request->last_name,
        //     'gender'    => $request->gender,
        //     'address'   => $request->address,
        //     'phone'     => $request->phone,
        //     'salary'    => $request->Salary,
        //     'department_id' => $request->department,
        //     'employee_status_id' => $request->Position
        // ]);

        // Alert::success('success', 'Added Successfully');

        // return redirect()->route('employees.index');

        return $request;
    }
}
