<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ToursRequest;
use Illuminate\Support\Str;
use App\Models\Type;
use App\Models\Tour;
use Config;

class ToursController extends Controller
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
        return ($this->redirectWithMessage('tours.index', 'language.notFoundMessage'));
    }

    public function index()
    {
        $tours = Tour::paginate(Config::get('paginate.tours'));

        return view('admin-layout.tours.tour-list', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();
        
        return view('admin-layout.tours.tour-add', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToursRequest $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $file->move("upload_image", $name);

        $tour = Tour::create([
            'type_id' => $request->type,
            'name' => $request->name,
            'price'=> $request->price,
            'discount' => $request->discount,
            'address' => $request->address,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $name,
        ]);
        $tour->save();

        return ($this->redirectWithMessage('tours.create', 'language.addMessage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        if (is_null($tour)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } else {
            return view('admin-layout.tours.tour-show', compact('tour'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $tours= Tour::find($id);
        if (is_null($tours)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        
        return view('admin-layout.tours.tour-edit', compact('types', 'tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToursRequest $request, $id)
    {
        $tour = Tour::find($id);
        if (is_null($tour)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } else {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move("upload_image", $name);
            unlink("upload_image/".$tour->image);
            
            $tour->update([
                'type_id' => $request->type,
                'name' => $request->name,
                'price'=> $request->price,
                'discount' => $request->discount,
                'address' => $request->address,
                'description' => $request->description,
                'content' => $request->content,
                'image' => $name
            ]);

            return ($this->redirectWithMessage('tours.index', 'language.updateMessage'));
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
        $tour = Tour::find($id);
        if (is_null($tour)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } 
            
        $tour->delete();

        return ($this->redirectWithMessage('tours.index', 'language.deleteMessage'));
    }
}
