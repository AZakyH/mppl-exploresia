<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->middleware('user')->except('logout');
    }

    /* Menampilkan halaman login */
    public function login_page()
    {
        return view('navbar.login_page');
    }

    /* Mengotentikasi user */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->jenis_user == 1)
            {
                return redirect()->intended();
            }
            return redirect()->intended();
        }
        
        else {
            return redirect()->back()->with('failmessage', 'Username/Password anda salah!');
        }
    }

    public function show(){
        return  view('home');
    }

    /* Logout */
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
