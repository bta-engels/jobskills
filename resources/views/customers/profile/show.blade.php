@extends('layouts.app')

@section('content')
   <h3>{{$customer->name}}</h3>
   <table class="table table-striped">
      @if($customer->img)
      <tr>
         <td>{{ __('Image') }}:</td>
         <td><img src="{{ asset('storage/images/' . $customer->img) }}" height="200" alt=""></td>
      </tr>
      @endif
      <tr>
         <td>{{ __('First- and Lastname') }}:</td>
         <td>{{ $customer->name }}</td>
      </tr>
      <tr>
         <td>{{ __('E-mail') }}</td>
         <td>{{ $customer->email }}</td>
      </tr>
      <tr>
         <td>{{ __('Phone number') }}</td>
         <td>{{ $customer->phone }}</td>
      </tr>
      <tr>
         <td>{{ __('Street') }}</td>
         <td>{{ $customer->street }}</td>
      </tr>
      <tr>
         <td>{{ __('City') }}</td>
         <td>{{ $customer->city }}</td>
      </tr>
      <tr>
         <td>{{ __('Postal code') }}</td>
         <td>{{ $customer->postcode }}</td>
      </tr>
      <tr>
         <td>{{ __('Date of Birth') }}</td>
         <td>{{ $customer->birthdate }}</td>
      </tr>
   </table>


   <div>
      <a class="btn btn-primary" href="{{route('customers.edit', $customer)}}">
         {{ __('Edit') }}
      </a>
   </div>
@endsection

