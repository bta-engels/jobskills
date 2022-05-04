<div class="navbar-light">
    <ul class="navbar-nav">
        @foreach(config('nav.cv') as $item)
            @php
                $route = 'cv.' .Str::camel($item). 'Edit'
            @endphp
            <li class="navbar-item">
                <a class="nav-link" href="{{ route($route, auth('customer')->user()) }}">{{ __($item) }}</a>
            </li>
        @endforeach
    </ul>
</div>