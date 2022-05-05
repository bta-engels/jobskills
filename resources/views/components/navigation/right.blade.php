<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @auth('admin')
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ auth('admin')->user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @elseauth('customer')
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left: 50px;">
                <img src="{{ asset('storage/images/' . Auth::user()->img) }}" style="width: 32px; height: 32px; position: absolute; bottom: 2px; left: 10px; border-radius: 50%;">
                {{ auth()->user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('customers.show', auth()->user()) }}">Profil</a><br>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @else
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
    @endauth

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
