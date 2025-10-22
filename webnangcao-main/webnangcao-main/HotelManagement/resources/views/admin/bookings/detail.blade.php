@extends('admin.layouts.app')
@section('title', 'Chi tiết đặt phòng')
@section('page-title', 'Thông tin chi tiết đặt phòng')

@section('content')
<div class="card shadow-sm p-4">
    <h5>Thông tin khách hàng</h5>
    <p><strong>Tên:</strong> Nguyễn Văn A</p>
    <p><strong>SĐT:</strong> 0123456789</p>

    <hr>

    <h5>Thông tin đặt phòng</h5>
    <p><strong>Phòng:</strong> 101 (Deluxe)</p>
    <p><strong>Ngày nhận:</strong> 2025-10-15</p>
    <p><strong>Ngày trả:</strong> 2025-10-17</p>
    <p><strong>Tổng tiền:</strong> 1,000,000₫</p>

    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
