@if (Auth::check())
    @php
        $user = Auth::user();
        // Redirect based on the user's role
        switch ($user->role) {
            case 'admin':
                $redirectUrl = route('admin.dashboard');
                $profile = route('admin.profile');
                $booking = '';
                $setting = route('customer.profile');
                break;
            case 'customer':
                $redirectUrl = route('customer.dashboard');
                $profile = route('customer.profile');
                $booking = route('customer.booking');
                $setting = route('customer.profile');
                break;
            case 'driver':
                $redirectUrl = route('driver.dashboard');
                $profile = route('driver.profile');
                $booking = route('driver.booking');
                $setting = route('driver.profile');
                break;
            case 'staff':
                $redirectUrl = route('staff.dashboard');
                $profile = route('staff.profile');
                $booking = '';
                $setting = route('customer.profile');
                break;
            default:
                $redirectUrl = '';
                $profile = '';
                $booking = '';
                $setting = '';
        }


    @endphp
    <div class="nav-right-account">
        <div class="dropdown">
            <div data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ url('public/assets/img/account/user.png') }}" alt>
                <i class="fa fa-caret-down"></i>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ $redirectUrl }}"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ $profile }}"><i class="far fa-user"></i> My Profile</a></li>
                @if ($booking)
                <li><a class="dropdown-item" href="{{ $booking }}"><i class="far fa-layer-group"></i> My Booking</a></li>
                @endif
                {{-- <li><a class="dropdown-item" href="{{ $setting }}"><i class="far fa-cog"></i> Settings</a></li> --}}
                <li><a class="dropdown-item logoutBtn" href="#" id="logoutBtn"><i class="far fa-sign-out"></i> Log Out</a></li>
            </ul>
        </div>
    </div>
    @endif

    @if(!Auth::check())
        <div class="header-top-link">
            <a href="{{ route('login.login') }}"><i class="far fa-arrow-right-to-bracket"></i> Login</a>
            <a href="{{ route('register.index') }}"><i class="far fa-user-vneck"></i> Register</a>
        </div>
    @endif
