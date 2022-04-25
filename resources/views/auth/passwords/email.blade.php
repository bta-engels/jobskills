@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-form method="POST" action="{{ route('password.email') }}">
                        <x-form-input type="email" class="" name="email" label="{{ ('email') }}" required autocomplete="email" autofocus/>
                        <x-form-submit class="mt-3">{{ __('Send Password Reset Link') }}</x-form-submit>


                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
