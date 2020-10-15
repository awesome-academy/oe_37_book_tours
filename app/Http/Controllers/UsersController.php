<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Models\User;

class UsersController extends Controller
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
        return ($this->redirectWithMessage('users.index', 'language.notFoundMessage'));
    }

    public function index()
    {
        $users = User::all();

        return view('admin-layout.users.user-list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-layout.users.user-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return ($this->redirectWithMessage('users.create', 'language.addMessage'));
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
        $user = User::find($id);
        if (is_null($user)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } else {
            return view('admin-layout.users.user-edit', compact('user'));
        }
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
        $user = User::find($id);
        if (is_null($user)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } else {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();

            return ($this->redirectWithMessage('users.index', 'language.updateMessage'));
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
        $user = User::find($id);
        if (is_null($user)) {
            return ($this->redirectToIndexWithNotFoundMessage());
        } else {
            $user->delete();
            
            return ($this->redirectWithMessage('users.index', 'language.deleteMessage'));
        }
    }
}
