@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3> {{ __('Education') }}</h3>
    <x-form>
        @bind($customer)
        <x-form-input type="text" class="mb-3" name="school" label="{{ __('School') }}" />
        <x-form-textarea class="mb-3" name="education" label="{{ __('Description') }}" />
        <x-form-input type="text" class="mb-3" name="date" label="{{ __('From') }}" />
        <x-form-input type="text" class="mb-3" name="date" label="{{ __('Till') }}" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
        @endbind
    </x-form>
@endsection
