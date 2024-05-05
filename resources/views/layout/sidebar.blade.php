<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- Branding and Logo Section -->
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <!-- Logo Image -->
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/depan/img/logo1.png') }}" width="40px" alt="logo" class="app-brand-logo demo">
            </span>
            <!-- Brand Text -->
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Stempert</span>
        </a>
        <!-- Menu Toggle for Mobile View -->
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <!-- Shadow Effect under the brand section -->
    <div class="menu-inner-shadow"></div>

    <!-- Navigation Menu -->
    <ul class="menu-inner py-1">
        <!-- Dashboard Menu Item -->
        <li class="menu-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Data Taruna Menu Item -->
        <li class="menu-item {{ Route::is('data_taruna.index') ? 'active' : '' }}">
            <a href="{{ route('data_taruna.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Data Taruna</div>
            </a>
        </li>
        <!-- Settings Menu Item -->
        <li class="menu-item {{ Route::is('setings.index') ? 'active' : '' }}">
            <a href="{{ route('setings.index') }}" class="menu-link">
                <i class="bx bx-cog me-2"></i>
                <div data-i18n="Analytics">Settings</div>
            </a>
        </li>
    </ul>
</aside>
