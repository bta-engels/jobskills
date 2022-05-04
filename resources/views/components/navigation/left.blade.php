<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    @auth('admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.languages.index') }}">{{ __('Languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.programmingLanguages.index') }}">{{ __('Programming languages') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.frameworks.index') }}">{{ __('Frameworks') }}</a>
        </li>
    @elseauth('customer')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cv.personalDataEdit', auth('customer')->user()) }}">{{ __('My CV') }}</a>
        </li>
    @endauth
</ul>
