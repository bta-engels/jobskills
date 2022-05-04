
<div class="navbar-light">
    <ul class="navbar-nav">
        @foreach(config('nav.cv') as $item)
            @php
                $route = 'cv.'.Str::camel($item).'Edit';
                $active = Route::is($route) ? 'active' : ''
            @endphp
            <li class="nav-item">
                <a class="nav-link {{ $active }}" href="{{ route($route, auth('customer')->user()) }}">{{ __($item) }}</a>
            </li>
        @endforeach
    </ul>
</div>
