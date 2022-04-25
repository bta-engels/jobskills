@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <x-form method="POST" action="{{ route('register') }}">
                        <x-form-input id="name" type="text" class="mb-3" name="name" label="{{ ('Name') }}" required autocomplete="name" autofocus />
                        <x-form-input id="email" type="email" class="mb-3" name="email" label="{{ ('Email') }}" required autocomplete="email"/>
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="new-password"/>
                        <x-form-input type="password" class="mb-3" name="password_confirmation" label="{{ __('Confirm Password') }}" required autocomplete="new-password"/>
                        <x-form-submit class="mt-3">{{ __('Register') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
