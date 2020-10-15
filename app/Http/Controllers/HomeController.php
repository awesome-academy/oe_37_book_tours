<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Tour;
use Config;
use App\Http\Requests\SearchRequest;

class HomeController extends Controller
{
    //
    public function index ()
    {
        $tours = Tour::limit(Config::get('limit.tours'))
            ->inRandomOrder()->get();
        $newTour = Tour::orderDesc()
            ->limit(Config::get('limit.new'))->get();

        return view('book_tour.pages.index', compact('tours', 'newTour'));
    }

    public function tours ()
    {
        $tours = Tour::Select('id', 'name', 'image', 'price', 'discount')
            ->orderDesc()
            ->paginate(Config::get('paginate.tours'));

        return view('book_tour.pages.tours', compact('tours'));
    }

    public function redirectRoute ($route = null, $message = null)
    {
        return redirect()->route($route)->with($message);
    }

    public function tourDetail ($id)
    {
        $tour = Tour::find($id);
        if ($tour) {
            $type = Type::find($tour->type_id);
            if ($type) {
                $similarTours = $type->tours->except($tour->id)->toArray();

                return view('book_tour.pages.tour_detail', compact('tour', 'similarTours'));
            }
        }

        return ($this->redirectRoute('errors', ['message' => '']));
    }

    public function tourByCategory ($id)
    {
        $type = Type::find($id);
        if ($type) {
            $tours = $type->tours->toArray();

            return view('book_tour.pages.tours_by_category', compact('type', 'tours'));
        }

        return ($this->redirectRoute('errors', ['message' => '']));
    }

    public function searchTour (SearchRequest $request)
    {
        $result = $request->key;
        $tours = Tour::search($result)
        ->paginate(Config::get('paginate.tours'));

        return view('book_tour.pages.search', compact('tours', 'result'));
    }
}
