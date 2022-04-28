@extends('layouts.app')

@section('content')
    <h3>{{ $customer->name }}</h3>
    <div>
        <a class="btn btn-primary" href="{{ route('customers.edit', $customer) }}">
            {{ __('Change profile data') }}</a>
    </div>
@endsection
