<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

/* Tambahanku */
use Illuminate\Http\Request;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)

    /* Menampilkan halaman register */
    public function register_page()
    {
        return view('register_page');
    }

    /* Membuat User Customer baru */
    protected function create(Request $req)
    {
        // return User::create([
        //     'name' => $req['name'],
        //     'email' => $req['email'],
        //     'phone_number' => $req['phonenumber'],
        //     'password' => Hash::make($req['password']),
        // ]);
        $user = new User();
        $user->username = $req['username'];
        $user->email = $req['email'];
        $user->phone_number = $req['phonenumber'];
        $user->password = bcrypt($req['password']);
        $user->jenis_user = 0;
        $user->created_at = Carbon::now();
        $user->save();
    }
}
