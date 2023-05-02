<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use App\Models\Romms;
use Illuminate\Http\Request;
use App\Models\RoomTypes;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RommsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Romms::all();

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roomTypes = RoomTypes::all();
        return view('rooms.create' , compact('roomTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Romms::create([
            'room_type_id' => $request->roomType,
            'status'       => $request->status
        ]);

        Alert::success('success', 'Added Successfully');

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Romms  $romms
     * @return \Illuminate\Http\Response
     */
    public function show(Romms $romms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Romms  $romms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomTypes = Romms::all();
        $roomid    = Romms::find($id);
       return view('rooms.editRoom' , compact('roomTypes' , 'roomid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Romms  $romms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
       DB::table('romms')->where('id' , $id)->update([

        'room_type_id' => $request->roomType,
        'status'       => $request->status

       ]);

       Alert::success('success', 'Updateing Successfully');

       return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Romms  $romms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Romms::destroy($id);

       Alert::success('success', 'Delete Successfully');

       return redirect()->route('rooms.index');

    }
}
