@extends('user.layouts.app')
@section('title', 'Trang chủ')

@section('content')
<div class="text-center py-5">
    <h1>Chào mừng đến với MyHotel</h1>
    <p>Trải nghiệm dịch vụ đặt phòng nhanh chóng và tiện lợi!</p>
    <a href="{{ route('user.rooms') }}" class="btn btn-primary mt-3">Xem phòng</a>
</div>
@endsection
