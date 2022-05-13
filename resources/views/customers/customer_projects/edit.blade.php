@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Edit projects') }}</h3>

    <x-form method="post" action="{{ route('customer_projects.update', $customerProject) }}">
        @method('put')
        @bind($customerProject)
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('Project') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-input type="date" class="mb-3" name="from" label="{{ __('From') }}" />
        <x-form-input type="date" class="mb-3" name="until" label="{{ __('Until') }}" />
        @endbind
        <x-form-submit class="mt-3">{{ __('Save and back') }}</x-form-submit>
    </x-form>
@endsection

