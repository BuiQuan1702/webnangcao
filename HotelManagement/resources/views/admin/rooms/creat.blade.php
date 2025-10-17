@extends('admin.layouts.app')
@section('title', 'Thêm phòng')
@section('page-title', 'Thêm phòng mới')

@section('content')
<form action="{{ route('admin.rooms.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên phòng</label>
        <input type="text" class="form-control" name="name" placeholder="VD: Phòng 101">
    </div>

    <div class="mb-3">
        <label class="form-label">Loại phòng</label>
        <select name="type" class="form-select">
            <option>Standard</option>
            <option>Deluxe</option>
            <option>VIP</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Giá/Đêm</label>
        <input type="number" name="price" class="form-control" placeholder="VD: 500000">
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success px-4">Lưu</button>
    <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Hủy</a>
</form>
@endsection
