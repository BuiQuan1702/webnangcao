<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.rooms.edit', compact('id'));
    }

    public function store(Request $request)
    {
        // Xử lý thêm phòng (chưa kết nối DB)
        return redirect()->route('admin.rooms.index')->with('success', 'Thêm phòng thành công!');
    }

    public function update(Request $request, $id)
    {
        // Xử lý cập nhật phòng (chưa kết nối DB)
        return redirect()->route('admin.rooms.index')->with('success', 'Cập nhật phòng thành công!');
    }

    public function destroy($id)
    {
        // Xử lý xóa phòng
        return redirect()->route('admin.rooms.index')->with('success', 'Xóa phòng thành công!');
    }
}
