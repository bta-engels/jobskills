@extends('layouts.app')

@section('content')
    @auth('admin')
        <h3>Admin</h3>
    @elseauth('customer')
        <h3>Kunde</h3>
    @else
        <h3>Gast</h3>
    @endauth

    <p>{{ __('This is my home page') }}</p>
@endsection
