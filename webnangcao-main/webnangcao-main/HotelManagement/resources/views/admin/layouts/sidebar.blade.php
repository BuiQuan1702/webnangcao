<nav class="d-flex flex-column bg-dark text-white p-3" style="height: 100vh; width: 220px; position: fixed;">
    <h4 class="text-center mb-4">Hotel Admin</h4>
    <a href="{{ route('admin.dashboard') }}" class="text-white mb-2">🏠 Dashboard</a>
    <a href="{{ route('admin.rooms.index') }}" class="text-white mb-2">🛏️ Quản lý phòng</a>
    <a href="{{ route('admin.bookings.index') }}" class="text-white mb-2">📘 Đặt phòng</a>
    <a href="{{ route('admin.customers.index') }}" class="text-white mb-2">👤 Khách hàng</a>
    <a href="{{ route('admin.reports.index') }}" class="text-white mb-2">📊 Báo cáo</a>
</nav>

<style>
.main-content {
    margin-left: 230px;
}
a.text-white {
    text-decoration: none;
    display: block;
    padding: 8px 10px;
    border-radius: 8px;
}
a.text-white:hover {
    background: rgba(255,255,255,0.2);
}
</style>
