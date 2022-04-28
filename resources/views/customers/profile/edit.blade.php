@extends('layouts.app')

@section('content')
    <h3> {{ __('Profile Data') }}</h3>
    <x-form action="{{ route('customers.update', $customer) }}" enctype="multipart/form-data" >
        @method('PUT')
        @bind($customer)
        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Profile image') }}" />

        <x-form-group label="{{ __('Contact Details') }}">
            <x-form-input type="text" class="mb-3" name="name" label="{{ __('First- and Lastname') }}" />
            <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" />
            <x-form-input type="tel" class="mb-3" name="phone" label="{{ __('Phone number') }}" />
        </x-form-group>

        <x-form-group label="{{ __('Address') }}">
            <x-form-input type="text" class="mb-3" name="street" label="{{ __('Street') }}" />
            <x-form-input type="text" class="mb-3" name="city" label="{{ __('City') }}" />
            <x-form-input type="text" class="mb-3" name="postcode" label="{{ __('Postal code') }}" />
        </x-form-group>

        <x-form-input type="date" class="mb-3" name="birthdate" label="{{ __('Date of Birth') }}" />

        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
        @endbind
    </x-form>
@endsection
