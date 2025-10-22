<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Booking')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.home') }}">🏨 MyHotel</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="{{ route('user.rooms') }}" class="nav-link">Phòng</a></li>
            <li class="nav-item"><a href="{{ route('user.booking') }}" class="nav-link">Đặt phòng</a></li>
            <li class="nav-item"><a href="{{ route('user.contact') }}" class="nav-link">Liên hệ</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    &copy; 2025 MyHotel - All Rights Reserved.
</footer>
</body>
</html>
