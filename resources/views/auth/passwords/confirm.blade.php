@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}
                    <x-form method="POST" action="{{ route('admin.password.confirm') }}">
                        <x-form-input type="password" class="mb-3" name="password" label="{{ __('Password') }}" required autocomplete="new-password" />
                        <x-form-submit class="mt-3">{{ __('Confirm Password') }}</x-form-submit>

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
