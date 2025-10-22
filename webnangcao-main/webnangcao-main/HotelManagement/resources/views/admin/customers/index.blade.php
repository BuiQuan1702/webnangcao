@extends('admin.layouts.app')
@section('title', 'Danh sách khách hàng')
@section('page-title', 'Quản lý khách hàng')

@section('content')
<table class="table table-striped">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Tổng số đặt</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Nguyễn Văn A</td>
            <td>0123456789</td>
            <td>a@gmail.com</td>
            <td>3</td>
        </tr>
    </tbody>
</table>
@endsection
