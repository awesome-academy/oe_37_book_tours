<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Session;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;

class UserController extends Controller
{
    public function redirectBack ($message = null)
    {
        return redirect()->back()->with($message);
    }

    public function redirectRoute ($route = null, $message = null)
    {
        return redirect()->route($route)->with($message);
    }

    public function getFormRegister ()
    {
        return view('book_tour.pages.register');
    }

    public function register (SignUpRequest $request)
    {
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        return ($this->redirectRoute('login.get', ['register' => '']));
    }

    public function getFormLogin ()
    {
        return view('book_tour.pages.login');
    }

    public function login (SignInRequest $request)
    {
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentials)) {
            return ($this->redirectRoute('home.index', ['login' => '']));
        }
        else {
            return ($this->redirectBack(['loginFalse' => '']));
        }
    }
}
