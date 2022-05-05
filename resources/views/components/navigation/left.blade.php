<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    @auth('admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.languages') }}">{{ __('Languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.programming_languages') }}">{{ __('Programming languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.frameworks') }}">{{ __('Frameworks') }}</a>
        </li>
    @elseauth('customer')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cv.personalDataEdit', auth('customer')->user()) }}">{{ __('My CV') }}</a>
        </li>
    @endauth
</ul>
