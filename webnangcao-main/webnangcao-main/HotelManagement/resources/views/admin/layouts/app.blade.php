<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quản trị khách sạn')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

    @include('admin.layouts.sidebar')

    <div class="main-content p-4">
        <header class="mb-4 border-bottom pb-2 d-flex justify-content-between align-items-center">
            <h3>@yield('page-title', 'Dashboard')</h3>

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">Đăng xuất</button>
            </form>
        </header>

        @yield('content')
    </div>

</body>
</html>
