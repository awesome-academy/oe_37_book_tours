<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Tour;
use Config;

class HomeController extends Controller
{
    //
    public function index ()
    {
        $tours = Tour::Limit(Config::get('limit.tours'))->inRandomOrder()->get();
        $tour_new = Tour::Limit(Config::get('limit.new'))->orderBy('id', 'desc')->get();

        return view('book_tour.pages.index', compact('tours', 'tour_new'));
    }

    public function tours ()
    {
    	$tours = Tour::Select('id', 'name', 'image', 'price', 'discount')
    	    ->paginate(Config::get('paginate.tours'));

    	return view('book_tour.pages.tours', compact('tours'));
    }
}
