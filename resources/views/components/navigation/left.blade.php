<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    @auth('admin')

    @elseauth('customer')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cv.personalDataEdit', auth('customer')->user()) }}">{{ __('My CV') }}</a>
        </li>
    @endauth


    <!-- auth checks -->
</ul>
