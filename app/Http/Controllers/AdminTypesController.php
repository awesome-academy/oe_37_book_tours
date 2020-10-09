<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TypesRequest;
use App\Models\Type;

class AdminTypesController extends Controller
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
        return ($this->redirectWithMessage('types.index', 'language.notFoundMessage'));
    }

    public function index()
    {
        $type = Type::all();
        return view('admin-layout.tour-types.type-list', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::where('parent_id', null)->get();
        return view('admin-layout.tour-types.type-add', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypesRequest $request)
    {
        $type = new Type;
        $type->name = $request->name;
        $type->parent_id = $request->parentType;
        $type->save();

        return ($this->redirectWithMessage('types.create', 'language.addMessage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parentType = Type::where('parent_id', null)->get();
        $type = Type::find($id);
        if ($type == null)
        {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        else
        {
            return view('admin-layout.tour-types.type-edit', compact('parentType', 'type'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypesRequest $request, $id)
    {
        $type = Type::find($id);
        if ($type == null)
        {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        else
        {
            $type->name = $request->name;
            $type->parent_id = $request->parentType;
            $type->save();

            return ($this->redirectWithMessage('types.index', 'language.updateMessage'));
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
        $type = Type::find($id);
        if ($type == null)
        {
            return ($this->redirectToIndexWithNotFoundMessage());
        }
        else
        {
            $type->delete();
            return ($this->redirectWithMessage('types.index', 'language.deleteMessage'));
        }
    }
}
