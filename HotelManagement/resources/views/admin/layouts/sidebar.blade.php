<nav class="bg-dark text-white vh-100 position-fixed" style="width:220px;">
    <div class="p-3">
        <h4>Hotel Admin</h4>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">📊 Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.rooms.index') }}" class="nav-link text-white">🛏️ Quản lý phòng</a></li>
            <li class="nav-item"><a href="{{ route('admin.bookings.index') }}" class="nav-link text-white">📅 Đặt phòng</a></li>
            <li class="nav-item"><a href="{{ route('admin.customers.index') }}" class="nav-link text-white">👤 Khách hàng</a></li>
            <li class="nav-item"><a href="{{ route('admin.reports.index') }}" class="nav-link text-white">📈 Báo cáo</a></li>
        </ul>
    </div>
</nav>
