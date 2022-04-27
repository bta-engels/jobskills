@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('admin.login') }}">
                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" required autocomplete="email" autofocus />
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="current-password" />
                        <x-form-checkbox name="remember" label="{{ __('Remember me') }}" />
                        <x-form-submit class="mt-3">{{ __('Login') }}</x-form-submit>

                        @if(Route::has('admin.password.request'))
                            <a class="btn btn-link mt-3" href="{{ route('admin.password.request') }}">
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
