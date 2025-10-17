<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.rooms.index');
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function edit($id)
    {
        return view('admin.rooms.edit', ['id' => $id]);
    }
}
