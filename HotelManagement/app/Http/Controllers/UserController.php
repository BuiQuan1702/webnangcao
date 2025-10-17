<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function rooms()
    {
        return view('user.rooms');
    }

    public function booking()
    {
        return view('user.booking');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
