@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('login') }}">

                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email') }}" required autocomplete="email" autofocus />
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="current-password" />
                        <x-form-checkbox class="" name="remember" label="{{ __('Remember Me') }}" />
                        <x-form-submit class="mt-3">
                            {{ __('Login') }}
                        </x-form-submit>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
