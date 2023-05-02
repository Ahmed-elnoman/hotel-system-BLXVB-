<?php

namespace App\Http\Controllers;

use App\Http\Requests\Departments\ValidatoinDemarptment;
use App\Models\Departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all departments
        $departments = Departments::all();

        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatoinDemarptment $request)
    {
       // add to databaes
       Departments::create([
        'name_department'  => $request->department_name,
        'description_de'   => $request->department_description,
        'total_conut'      => $request->total_employees
       ]);

       Alert::success('success', 'Added Successfully');

       return redirect()->route('departments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return $request;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(ValidatoinDemarptment $request, $id)
    {

        DB::table('departments')->where('id' , $id)->update([
            'name_department'  => $request->department_name,
            'description_de'   => $request->department_description,
            'total_conut'      => $request->total_employees
          ]);

       Alert::success('success', 'Updated Successfully');

       return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departments::destroy($id);

        Alert::success('success', 'Deleted Successfully');

        return redirect()->route('departments.index');

    }

}
