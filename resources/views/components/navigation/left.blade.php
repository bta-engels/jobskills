<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    @auth('admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('languages.index') }}">{{ __('Languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">{{ __('Programming languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('frameworks.index') }}">{{ __('Frameworks') }}</a>
        </li>
    @elseauth('customer')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cv.personalDataEdit', auth('customer')->user()) }}">{{ __('My CV') }}</a>
        </li>
    @endauth
</ul>
