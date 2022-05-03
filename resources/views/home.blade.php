@extends('layouts.app')

@section('content')
    @auth('admin')
        <h3>Admin</h3>
    @elseauth('customer')
        <h3>Customer</h3>
    @else
        <h3>Guest</h3>
    @endauth

    <p>{{ __('This is my home page') }}</p>
@endsection
