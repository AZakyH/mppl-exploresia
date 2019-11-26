<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        return view('navbar.index');
    }
    public function discover()
    {
        return view('navbar.discover');
    }
    public function blogs()
    {
        return view('navbar.blogs');
    }
    public function aboutus()
    {
        return view('navbar.discover');
    }
    public function plan_now()
    {
        return view('plan_now');
    }
}