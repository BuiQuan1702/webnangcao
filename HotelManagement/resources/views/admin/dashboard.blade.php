@extends('admin.layouts.app')

@section('title', 'Bảng điều khiển')
@section('page-title', 'Tổng quan hệ thống')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Phòng trống</h5>
                <h3>{{ $availableRooms ?? 12 }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Đang thuê</h5>
                <h3>{{ $occupiedRooms ?? 8 }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Doanh thu hôm nay</h5>
                <h3>{{ number_format($revenueToday ?? 2500000) }}₫</h3>
            </div>
        </div>
    </div>
</div>
@endsection
