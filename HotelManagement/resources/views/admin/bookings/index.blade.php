@extends('admin.layouts.app')
@section('title', 'Quản lý đặt phòng')
@section('page-title', 'Danh sách đặt phòng')

@section('content')
<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Mã đặt</th>
            <th>Khách hàng</th>
            <th>Phòng</th>
            <th>Ngày nhận</th>
            <th>Ngày trả</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#BK001</td>
            <td>Nguyễn Văn A</td>
            <td>Phòng 101</td>
            <td>2025-10-15</td>
            <td>2025-10-17</td>
            <td><span class="badge bg-success">Đã nhận</span></td>
            <td>
                <a href="{{ route('admin.bookings.detail', 1) }}" class="btn btn-sm btn-info">Xem</a>
                <button class="btn btn-sm btn-danger">Hủy</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
