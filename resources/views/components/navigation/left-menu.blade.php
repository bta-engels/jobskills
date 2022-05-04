<div class="navbar-light">
    <ul class="navbar-nav">
        @foreach(config('nav.cv') as $item)
            <li class="navbar-item">
                <a class="nav-link" href="">{{ __($item) }}</a>
            </li>
        @endforeach
    </ul>
</div>