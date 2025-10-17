@extends('admin.layouts.app')

@section('title', 'Bảng điều khiển')
@section('page-title', 'Tổng quan hệ thống')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Số phòng</h5>
                <p class="display-6">120</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Đặt phòng hôm nay</h5>
                <p class="display-6">18</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Khách hàng</h5>
                <p class="display-6">75</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Doanh thu</h5>
                <p class="display-6">45.000.000₫</p>
            </div>
        </div>
    </div>
</div>
@endsection
