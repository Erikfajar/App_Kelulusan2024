<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                {{-- <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none"
                placeholder="Search..." aria-label="Search..." /> --}}
                <span>{{ Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}</span>
                <span> - </span>
                <span> </span>
                <span id="liveTime"></span>
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->


            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                {{-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                data-bs-toggle="dropdown"> --}}
                {{-- <div class="avatar avatar-online"> --}}
                <a href="{{ route('logout') }}" onclick="return confirm('Anda yakin Logout?')"
                    class="btn btn-primary">Logout</a>
                {{-- </div> --}}
                {{-- </a> --}}
                {{-- <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <p>haha</p>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <span class="fw-semibold d-block">John Doe</span>
                                <small class="text-muted">Admin</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span
                                class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul> --}}
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

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
