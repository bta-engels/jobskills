@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <x-form method="POST" action="{{ route('admin.register') }}">
                        <x-form-input class="mb-3" name="name" default="{{ old('name') }}" label="{{ __('Vor- und Nachname') }}" required autocomplete="name" autofocus />
                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" default="{{ old('email') }}" required autocomplete="email" />
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="new-password" />
                        <x-form-input id="password-confirm" type="password" class="mb-3" name="password_confirmation" label="{{ __('Password repeat') }}" required autocomplete="new-password" />
                        <x-form-submit class="mt-3">{{ __('Register') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
