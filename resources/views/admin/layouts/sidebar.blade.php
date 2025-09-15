<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <div class="badge badge-danger">new</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-blog menu-icon"></i>
                <span class="menu-title">{{ __('Blogs') }}</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.index') }}">{{ __('All Blogs') }}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.create') }}">{{ __('Create Blog') }}</a></li>
                </ul>
            </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="fa-solid fa-screwdriver-wrench menu-icon"></i>
                <span class="menu-title">{{ __('Services') }}</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">{{ __('All Service') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services.create') }}">{{ __('Create Service') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="fa-solid fa-book menu-icon"></i>
                <span class="menu-title">{{ __('Portfolio') }}</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('portfolios.index') }}">{{ __('All Portfolio') }}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('portfolios.create') }}">{{ __('Create Portfolio') }}</a></li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="fa-solid fa-users menu-icon"></i>
                <span class="menu-title">{{ __('Clients') }}</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('clients.index') }}">{{ __('Submissions') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="fa-solid fa-gears menu-icon"></i>
                <span class="menu-title">{{ __('Setting') }}</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">{{ __('Profile') }}</a></li> -->
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('clearCacheForm').submit();"> {{ __('Clear Cache') }} </a></li>
                    <form id="clearCacheForm" action="{{ route('admin.clearCache') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log Out') }} </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>