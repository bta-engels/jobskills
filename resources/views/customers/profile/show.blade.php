@extends('layouts.app')

@section('content')
   <h3>{{$customer->name}}</h3>
   <table class="table table-striped">
      <tr>
         <td>{{ __('First- and Lastname') }}:</td>
         <td>{{ $customer->name }}</td>
      </tr>
      <tr>
         <td>{{ __('E-mail') }}</td>
         <td>{{ $customer->email }}</td>
      </tr>
   </table>


   <div>
      <a class="btn btn-primary" href="{{route('customers.edit', $customer)}}">
         {{ __('Edit') }}
      </a>
   </div>
@endsection

