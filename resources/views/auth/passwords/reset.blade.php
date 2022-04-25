@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('password.update') }}">
                    <x-form-input id="email" type="email" class="" name="email" label="{{ $email ?? ('Email') }}" required autocomplete="email" autofocus/>
                    <x-form-input id="password" type="password" class="" name="password" required autocomplete="new-password"/>
                    <x-form-input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                    <x-form-submit class="mt-3">{{ __('Reset Password') }}</x-form-submit>

                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
