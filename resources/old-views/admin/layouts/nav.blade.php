<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="{{ url('/') }}" target="_blank"><img src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}" target="_blank"><img src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav me-lg-2">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link show" href="#" data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="true">
                    <img src="{{ asset('assets/auth/avatar.png') }}" alt="profile">
                    <span class="nav-profile-name">
                        {{ Auth::user()->name }} Custom Patch
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown" data-bs-popper="static">
                    <a class="dropdown-item">
                        <i class="typcn typcn-cog-outline text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="typcn typcn-eject text-primary"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link notifications-dropdown" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background: #2144D8;line-height: 22px;border-radius: 40px;min-width: 100px;text-align: center;font-weight: 700;">
                    <img src="{{ asset('assets/auth/logout.jpg') }}" style="border-radius: 50%;height: 30px;">
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>