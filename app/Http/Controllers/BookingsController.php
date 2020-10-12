<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourBooking;
use App\Models\User;
use Config;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectWithMessage($routeName, $message)
    {
        return redirect()->route($routeName)->with('notice', trans($message));
    }

    public function redirectToIndexWithNotFoundMessage()
    {
        return ($this->redirectWithMessage('bookings.index', 'language.notFoundMessage'));
    }

    public function index()
    {
        $tourBookings = TourBooking::paginate(Config::get('paginate.tours'));
        $users = User::all();

        return view('admin-layout.bookings.booking-list', compact('tourBookings', 'users'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourBooking= TourBooking::find($id);
        if (is_null($tourBooking)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        
        return view('admin-layout.bookings.booking-show', compact('tourBooking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tourBooking = TourBooking::find($id);
        if (is_null($tourBooking)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        }

        if ($request->input('action') == "acceptBooking") {
            $tourBooking->status = Config::get('booking-status.accepted');
            $tourBooking->save();

            return ($this->redirectWithMessage('bookings.index', 'language.updateMessage'));
        } else {
            $tourBooking->status = Config::get('booking-status.cancelled');
            $tourBooking->save();

            return ($this->redirectWithMessage('bookings.index', 'language.updateMessage'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourBooking = TourBooking::find($id);
        if (is_null($tourBooking)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } 
        $tourBooking->delete();
        
        return ($this->redirectWithMessage('bookings.index', 'language.deleteMessage'));
    }
}
