<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    @php
    $notificationCount = DB::table('contact_models') ->count();
@endphp

<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
    <div class="dropdown-menu-header">

    </div>
    <!-- Rest of your dropdown content -->
</div>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="{{ route('contact.show') }}" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">{{ $notificationCount }}</span>
                    </div>
                </a>



            </li>

            <li class="nav-item dropdown mr-5">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <span class="text-dark">
                            {{ Auth::user()->name }}

                        </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}"><i class="align-middle me-1" data-feather="user"></i>
                       Edit Profile</a>
                    
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('user.logout') }}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
