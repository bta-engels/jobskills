@extends('layouts.app')

@section('content')
   <h3>{{ $customer->name }}</h3>
   <div>
      <x-form method="POST" action="{{ route('customers.update', $customer) }}">
      <a class="btn btn-primary" href="{{route('customers.edit', $customer)}}">
         {{ __('Edit') }}
      </a>
   </div>
@endsection
