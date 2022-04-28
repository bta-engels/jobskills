<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('customers.show', auth()->user()) }}">Profil</a><br>
                <a class="dropdown-item" href="#"
                   onlick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ __('Languages') }}</a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li class="dropdown-item">
                <a class="nav-link" href="{{ route('locale','en') }}">{{ __('English') }}</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ route('locale','de') }}">{{ __('German') }}</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ route('locale','sr') }}">{{ __('Serbian') }}</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ route('locale','cs') }}">{{ __('Czech') }}</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ route('locale','tr') }}">{{ __('Turkish') }}</a>
            </li>
        </ul>
    </li>
</ul>
