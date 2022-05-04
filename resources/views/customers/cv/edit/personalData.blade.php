@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3> {{ __('Personal data') }}</h3>
    <x-form method="post" action="{{ route('cv.personalDataStore', $customer) }}">
        @bind($customer)
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('First- and Lastname') }}" />
        <x-form-input type="email" class="mb-3" name="email" label="{{ __('Email Address') }}" />
        <x-form-input type="tel" class="mb-3" name="phone" label="{{ __('Phone number') }}" />
        <x-form-input type="text" class="mb-3" name="street" label="{{ __('Street') }}" />
        <x-form-input type="text" class="mb-3" name="city" label="{{ __('City') }}" />
        <x-form-input type="text" class="mb-3" name="postcode" label="{{ __('Postal code') }}" />
        <x-form-input type="date" class="mb-3" name="birthdate" label="{{ __('Date of Birth') }}" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
        @endbind
    </x-form>
@endsection

