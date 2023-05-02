<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Bookings;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bills::all();

        return view('bills.index' , compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookings = Bookings::all();
        // $guests  = Guests::all();

        return view('models/bills.searchBookingModels' , compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bills::create([
            'guest_id'           => $request->GuestsId,
            'booking_id'         => $request->roomId,
            'roomCharge'         => $request->roomCharge,
            'roomService'        => $request->roomService,
            'micsCharge'         => $request->micsCharge,
            'restaurantCharge'   => $request->restaurantCharge,
            'ifLateCheckout'     => $request->ifLateCheckout,
            'paymentMode'        => $request->paymentMode,
            'creditCardNo'       => $request->creditCardNo
        ]);

        Alert::success('success', 'adding Successfully');

        return redirect()->route('bills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function show(Bills $bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function edit(Bills $bills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bills $bills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bills::withTrashed()
        ->where('id', $id)
        ->forceDelete();

        Alert::success('success', 'delete Successfully');

        return redirect()->back();
    }


    public function searchBooking(Request $request){

      $getBookingsId   =  DB::table('bookings')->where('id' , $request->bookingid)->get();
      $getSearchBill   = $request->bookingid;

      if(count($getBookingsId) > 0) {

        return view('bills.addNewBill' , compact('getBookingsId'));

      }else{
        Alert::error('error', 'Booking number not font');

        return redirect()->back();

      }

    }

    public function SoftDeleteBill($id) {

        Bills::destroy($id);

        Alert::success('success', 'Archives Successfully');

        return redirect()->route('bills.index');

    }

    public function viewArchive() {

        $bliisArchive = Bills::onlyTrashed()->get();

        return view('bills.archive' , compact('bliisArchive'));

    }

    public function unArchiveBill($id) {

        Bills::withTrashed()->where('id' , $id)->restore();

        Alert::success('success', 'UnArchives Successfully');

        return redirect()->back();

    }
}
