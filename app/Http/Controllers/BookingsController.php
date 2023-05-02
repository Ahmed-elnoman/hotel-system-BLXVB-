<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Guests;
use App\Models\Romms;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingToGusets;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Bookings::all();
        $guest    = Guests::all();
        $room     = Romms::all();

        return view('bookings.index' , compact('bookings' , 'guest' , 'room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guests = Guests::all();
        $rooms  = Romms::all();
        return view('bookings.addBooking' , compact('guests' , 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Bookings::create([
            'guest_id'      => $request->GuestsId,
            'room_id'       => $request->roomId,
            'bookingDate'   => $request->bookingDate,
            'arrivelDate'   => $request->arriveDate,
            'departureDate' => $request->departureDate,
            'numbChildren'  => $request->numberChildren,
            'specialReq'    => $request->specialReq
       ]);

    //    Mail::to()->send(new BookingToGusets());

        Alert::success('success', 'adding Successfully');

        return redirect()->route('bookings.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Bookings $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $booking = Bookings::find($id);

        return view('bookings.editBooking' , compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('bookings')->where('id' , $id)->update([
            'guest_id'      => $request->guestId,
            'room_id'       => $request->roomId,
            'bookingDate'   => $request->bookingDate,
            'arrivelDate'   => $request->arriveDate,
            'departureDate' => $request->departureDate,
            'numbChildren'  => $request->numberChildren,
            'specialReq'    => $request->specialReq
        ]);


        Alert::success('success', 'updateing Successfully');

        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bookings::destroy($id);

        Alert::success('success', 'Deleteing Successfully');

        return redirect()->back();

    }


    public function printBooking($id){

        $booking = Bookings::find($id);

        // return $booking;
        return view('bookings.print_booking' , compact('booking'));

    }


    public function sendMail($id) {
        $ids = Bookings::find($id);


        Mail::to($ids->getGuests->email)->send(new BookingToGusets($ids));

        Alert::success('success', 'sending Successfully');

        return redirect()->back();
    }
}
