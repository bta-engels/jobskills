@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('password.update') }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" default="{{ old('email') }}" required autocomplete="email" />
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="new-password" />
                        <x-form-input id="password-confirm" type="password" class="mb-3" name="password_confirmation" label="{{ __('Password repeat') }}" required autocomplete="new-password" />
                        <x-form-submit class="mt-3">{{ __('Reset Password') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
