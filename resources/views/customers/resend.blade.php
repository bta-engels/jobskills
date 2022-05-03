@extends('layouts.app')

@section('content')
    <div class=""text-center>
        @if (session('success'))
            <h3 class=""alert alert-success">{{ session(('success')) }}></h3>

    </div>
<a class="btn btn-primary" href="{{route('customers.resend', $customer)}}">
    {{ __('Resend Confirmation Link') }}
</a>
@endsection
