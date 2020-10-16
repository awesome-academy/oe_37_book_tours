<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Revenue;
use App\Models\TourBooking;
use App\Http\Requests\RevenuesRequest;
use Config;

class RevenuesController extends Controller
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
        return ($this->redirectWithMessage('revenues.index', 'language.notFoundMessage'));
    }

    public function index()
    {
        $revenues = Revenue::paginate(Config::get('paginate.tours'));

        return view('admin-layout.revenues.revenue-list', compact('revenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-layout.revenues.revenue-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RevenuesRequest $request)
    {
        $from_date = date("Y-m-d", strtotime($request->from_date));
        $to_date = date("Y-m-d", strtotime($request->to_date));
        $tours = TourBooking::accepted()
            ->whereBetween('from_date', [$from_date, $to_date])
            ->get();
        $numberOfTours = count($tours);
        $total_income = $tours->sum('price');
        
        $revenue = new Revenue;
        $revenue->total_tour = $numberOfTours;
        $revenue->total_income = $total_income;
        $revenue->from_date = $from_date;
        $revenue->to_date = $to_date;
        $revenue->save();

        return $this->redirectWithMessage('revenues.index', 'language.addMessage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revenue = Revenue::find($id);
        if (is_null($revenue)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        
        $tourBookings = TourBooking::accepted()
            ->whereBetween('from_date', [$revenue->from_date, $revenue->to_date])
            ->get();

        return view('admin-layout.revenues.revenue-show', compact('revenue', 'tourBookings'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revenue = Revenue::find($id);
        if (is_null($revenue)) {
            return $this->redirectToIndexWithNotFoundMessage();
        } 
        $revenue->delete();
        
        return $this->redirectWithMessage('revenues.index', 'language.deleteMessage');
    }
}
