@extends('layouts.app')

@section('content')
    <div class="text-center">
        @if(session('success'))
            <h3 class="alert alert-success">{{ session('success') }}</h3>
        @endif
        <a class="btn btn-primary mt-5" href="{{ route('resend', $customer) }}">{{ __('Resend confirmation mail') }}</a>
    </div>
@endsection
