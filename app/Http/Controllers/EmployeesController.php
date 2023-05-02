<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationEmployees;
use App\Models\Departments;
use App\Models\Employees;
use App\Models\positions;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = positions::all();
        $departments = Departments::all();
        return view('employees.createEmployee' , compact('departments' , 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employees::create([
            'firstName' => $request->first_name,
            'lastName'  => $request->last_name,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'salary'    => $request->Salary,
            'department_id' => $request->department,
            'employee_status_id' => $request->position
        ]);

        Alert::success('success', 'Added Successfully');

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee     = Employees::find($id);
        $positions = positions::all();
        $departments = Departments::all();

        return view('employees.editEmployee' , compact('employee', 'positions' , 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('employees')->where('id' , $id)->update([

            'firstName' => $request->first_name,
            'lastName'  => $request->last_name,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'salary'    => $request->Salary,
            'department_id' => $request->department,
            'employee_status_id' => $request->position

        ]);

        Alert::success('success', 'updated Successfully');

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::withTrashed()
        ->where('id', $id)
        ->forceDelete();

        Alert::success('success', 'delete Successfully');

        return redirect()->back();
    }

    public function softDelete ($id){

        Employees::destroy($id);
        Alert::success('success', 'Archives Successfully');

        return redirect()->route('employees.index');
    }


    public function showArchivesEmployees() {

        $archivesEmployee  = Employees::onlyTrashed()->get();

        return view('employees.archives' , compact('archivesEmployee'));

    }


    public function getArchivesEmployee($id) {

        Employees::withTrashed()
        ->where('id', $id)
        ->restore();

        Alert::success('success', 'UnArchives Successfully');

        return redirect()->back();

    }
}
