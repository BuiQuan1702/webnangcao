<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('admin.bookings.index');
    }

    public function detail($id)
    {
        return view('admin.bookings.detail', ['id' => $id]);
    }
}
