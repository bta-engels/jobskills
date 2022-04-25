@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('password.update') }}">
                        <x-form-input type="hidden" class="mb-3" name="token" label="{{ $token }}" required autocomplete="token" autofocus />
                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" required autocomplete="email" autofocus />
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="new-password" autofocus />
                        <x-form-input type="password" class="mb-3" name="password_confirmation" label="{{ __('Confirm Password') }}" required autocomplete="new-password" autofocus />
                        <x-form-submit class="mt-3">{{ __('Reset Password') }}</x-form-submit>

                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
