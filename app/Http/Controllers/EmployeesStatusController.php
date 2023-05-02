<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\EmployeesStatus;
use Illuminate\Http\Request;

class EmployeesStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $positions = EmployeesStatus::all();

        return view('positions.index' , compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees_status  $employees_status
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeesStatus $employees_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees_status  $employees_status
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeesStatus $employees_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees_status  $employees_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeesStatus $employees_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees_status  $employees_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeesStatus $employees_status)
    {
        //
    }
}
