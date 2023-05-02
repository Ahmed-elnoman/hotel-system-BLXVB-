<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestValidatetion;
use App\Models\Guests;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Mail\ChangeUsersMail;
use Illuminate\Support\Facades\Mail;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guests::all();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Guests::create([
            'First_name'       => $request->first_name,
            'Last_name'        => $request->last_name,
            'phone'            => $request->phone,
            'email'            => $request->email,
            'passwors'         => $request->password,
            'gender'           => $request->gender,
            'age'              => $request->age,
            'passPortNo'       => $request->passprotnumber,
            'address'          => $request->address,
            'number_of_person' => $request->number_of_person,
            'city'             => $request->city,
            'conutry'          => $request->country,
        ]);


        Alert::success('success', 'Added Successfully');

        return redirect()->route('guests.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guests  $guests
     * @return \Illuminate\Http\Response
     */
    public function show(Guests $guests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guests  $guests
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guests::find($id);
        return view('guests.edit' , compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guests  $guests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      DB::table('guests')->where('id' , $id)->update([
        'First_name'       => $request->first_name,
        'Last_name'        => $request->last_name,
        'phone'            => $request->phone,
        'email'            => $request->email,
        'passwors'         => $request->password,
        'gender'           => $request->gender,
        'age'              => $request->age,
        'passPortNo'       => $request->passprotnumber,
        'address'          => $request->address,
        'number_of_person' => $request->number_of_person,
        'city'             => $request->city,
        'conutry'          => $request->country,
      ]);

      Alert::success('success', 'updateing Successfully');

        return redirect()->route('guests.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guests  $guests
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guests::withTrashed()
        ->where('id', $id)
        ->forceDelete();

        Alert::success('success', 'Deleteing Successfully');

        return redirect()->back();
    }

    public function delete($id) {
        Guests::destroy($id);

        Alert::success('success', 'Archiveing Successfully');

        return redirect()->route('guests.index');
    }


    public function archiverGuest() {

        $archives = Guests::onlyTrashed()->get();

        return view('guests.archives' , compact('archives'));
    }


    public function unarchive($id) {

        Guests::withTrashed()->where('id',$id)->restore();

        Alert::success('success', 'UnArchives Successfully');

        return redirect()->back();



    }


}
