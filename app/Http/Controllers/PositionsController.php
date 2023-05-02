<?php

namespace App\Http\Controllers;

use App\Models\positions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = positions::all();

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
        $request->validate([
            'position_name'        => 'required | string',
            'position_description' => 'required | string'
        ]);

        positions::create([
            'roleTitle' => $request->position_name,
            'roleDecs'  => $request->position_description
        ]);

        Alert::success('success', 'Added Successfully');

        return redirect()->route('position.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function show(positions $positions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function edit(positions $positions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'position_name'        => 'required | string',
            'position_description' => 'required | string'
        ]);

        DB::table('employees_statuses')->where('id' , $id)->update([

            'roleTitle' => $request->position_name,
            'roleDecs'  => $request->position_description
        ]);


        Alert::success('success', 'updated Successfully');

        return redirect()->route('position.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        positions::destroy($id);


        Alert::success('success', 'Deleted Successfully');

        return redirect()->route('position.index');
    }
}
