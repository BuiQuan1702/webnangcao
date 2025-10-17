@extends('admin.layouts.app')
@section('title', 'Báo cáo thống kê')
@section('page-title', 'Thống kê doanh thu')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>Tổng doanh thu tháng</h5>
                <h3>₫25,000,000</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>Số phòng được thuê</h5>
                <h3>42</h3>
            </div>
        </div>
    </div>
</div>
@endsection
