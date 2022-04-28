@extends('layouts.app')

@section('content')
    <h3>{{ __('Profile data') }}</h3>
    <x-form action="{{ route('customers.update', $customer) }}"
            class="col-sm-12 col-lg-6"
            enctype="multipart/form-data"
    >
        @method('put')
        @bind($customer)
        <x-form-input name="name" label="{{ __('Vor- und Nachname') }}" />
        <x-form-input name="email" type="email" label="{{ __('Email') }}" />

        @endbind()
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection

