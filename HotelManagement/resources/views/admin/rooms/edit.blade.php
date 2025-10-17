@extends('admin.layouts.app')
@section('title', 'Sửa phòng')
@section('page-title', 'Cập nhật thông tin phòng')

@section('content')
<form action="{{ route('admin.rooms.update', 1) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Tên phòng</label>
        <input type="text" class="form-control" name="name" value="Phòng 101">
    </div>

    <div class="mb-3">
        <label class="form-label">Loại phòng</label>
        <select name="type" class="form-select">
            <option selected>Deluxe</option>
            <option>Standard</option>
            <option>VIP</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Giá/Đêm</label>
        <input type="number" name="price" value="500000" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3">Phòng sạch sẽ, có view đẹp.</textarea>
    </div>

    <button type="submit" class="btn btn-primary px-4">Cập nhật</button>
    <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
