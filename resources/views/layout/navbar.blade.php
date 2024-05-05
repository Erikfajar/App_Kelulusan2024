<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <!-- Menu Toggle for Mobile View -->
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <!-- Right Side Content -->
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Date Display -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <span>{{ Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}</span>
                <span> - </span>
                <span id="liveTime"></span>
            </div>
        </div>
        <!-- End Date Display -->

        <!-- User Actions -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Logout Button -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a href="{{ route('logout') }}" onclick="return confirm('Anda yakin Logout?')"
                    class="btn btn-primary">Logout</a>
            </li>
            <!-- End Logout Button -->
        </ul>
        <!-- End User Actions -->
    </div>
</nav>

<!-- Live Time Update Script -->
<script>
    function updateLiveTime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var formattedTime = " " + hours + ':' + minutes + ':' + seconds; // Format sesuai kebutuhan

        document.getElementById('liveTime').textContent = formattedTime;
    }

    // Memperbarui waktu setiap detik
    setInterval(updateLiveTime, 1000);

    // Memanggil fungsi sekali saat halaman dimuat untuk menghindari delay 1 detik sebelum waktu pertama kali ditampilkan
    updateLiveTime();
</script>
