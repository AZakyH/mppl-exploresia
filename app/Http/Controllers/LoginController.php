<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
 
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->jenis_user == 1)
            {
                return redirect()->intended('admin');
            }

            return redirect()->intended('dashboard');
        }

        else {
            // return redirect()->intended('/');
            return redirect()->back()->with('failmessage', 'Username/Password anda salah!');

        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
