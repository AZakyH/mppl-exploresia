<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
