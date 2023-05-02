<?php

namespace App\Http\Controllers;

use App\Models\RoomTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeRooms = RoomTypes::all();
        return view('RoomTypes.index' , compact('typeRooms'));
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
        RoomTypes::create([
            'RoomPrice'        => $request->RoomPrice,
            'DefaultRoomPrice' => $request->DefaultRoomPrice,
            'RoomImage'        => $request->RoomImage,
            'RoomDesc'         => $request->RoomDesc
        ]);

        Alert::success('success', 'Added Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function show(RoomTypes $roomTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomTypes $roomTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('room_types')->where('id' , $id)->update([

            'RoomPrice'        => $request->RoomPrice,
            'DefaultRoomPrice' => $request->DefaultRoomPrice,
            'RoomImage'        => $request->RoomImage,
            'RoomDesc'         => $request->RoomDesc

        ]);

        Alert::success('success', 'Updated Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomTypes $roomTypes)
    {
        //
    }

    public function deleteRoomType($id){

        RoomTypes::destroy($id);
        Alert::success('success', 'Deleted Successfully');

        return redirect()->back();


    }
}
