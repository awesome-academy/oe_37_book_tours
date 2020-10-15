<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Tour;

class BookingTourController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function redirectRoute ($route = null, $message = null)
    {
        return redirect()->route($route)->with($message);
    }

    public function getFormCheckout ($id)
    {
        $tour = Tour::find($id);
        if ($tour) {
            $provinces = Province::all()->pluck('name', 'province_code');

            return view('book_tour.pages.booking.checkout', compact('provinces', 'tour'));
        }

        return ($this->redirectRoute('errors', ['message' => '']));
    }

    public function checkout (Request $request, $id)
    {

    }   
}
