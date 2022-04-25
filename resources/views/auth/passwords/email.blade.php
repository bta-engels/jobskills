@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-form method="POST" action="{{ route('password.email') }}">
                        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" default="{{ old('email') }}" required autocomplete="email" />
                        <x-form-submit class="mt-3">{{ __('Send Password Reset Link') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
