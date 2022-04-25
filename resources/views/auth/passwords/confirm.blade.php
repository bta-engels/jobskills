@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <x-form method="POST" action="{{ route('password.confirm') }}">
                        <x-form-input type="password" class="" name="password" label="{{ __('Password') }}" required autocomplete="current-password" />

                        <x-form-submit>
                            {{ __('Confirm Password') }}
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
