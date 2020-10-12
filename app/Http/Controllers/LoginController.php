<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function redirectToLoginWithFailedMessage() 
    {
        return redirect()->route('getAdminLogin')->with('notice', trans('language.loginFailed'));
    }
    
    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->adminEmail,
            'password' => $request->adminPassword,
        ];

        if (Auth::attempt($arr))
        {
            if (Gate::allows('allow-admin', Auth::user())) {
                return redirect()->route('getAdminIndex');
            }

            return $this->redirectToLoginWithFailedMessage();
        }  
        
        return $this->redirectToLoginWithFailedMessage();
    }

    public function getAdminIndex()
    {
        return view('admin-layout.admin-index');
    }

    public function getLogOut()
    {
        Auth::logout();
        
        return redirect()->route('getAdminLogin');
    }
}
