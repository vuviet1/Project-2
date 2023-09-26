<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
{{--            <i class="fas fa-laugh-wink"></i>--}}
            <img src="http://127.0.0.1:8000/images/img.png" alt="" class="img-profile rounded-circle" style="width: 50px">
        </div>
        <div class="sidebar-brand-text mx-3">BKACAD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item @if(request()->routeIs('users.index')) active @endif">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Học phí') }}</span></a>
    </li>

    <li class="nav-item @if(request()->routeIs('about')) active @endif">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-fw fa-eye"></i>
            <span>{{ __('Quản lý học sinh') }}</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Quản lý thu chi') }}</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Hóa đơn') }}</span></a>
    </li>

    <!-- Divider -->
{{--    <hr class="sidebar-divider">--}}

{{--    <!-- Nav Item - Pages Collapse Menu -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
{{--           aria-expanded="true" aria-controls="collapseTwo" style="padding-top: inherit;">--}}
{{--            <i class="fas fa-fw fa-cog"></i>--}}
{{--            <span>Two-level menu</span>--}}
{{--        </a>--}}
{{--        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <a class="collapse-item" href="#">Child menu</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline pt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
