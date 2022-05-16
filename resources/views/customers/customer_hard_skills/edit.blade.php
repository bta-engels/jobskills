@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Edit hard skill') }}</h3>

    <x-form method="post" action="{{ route('customer_hard_skills.update', $customerHardSkill) }}">
        @method('put')
        @bind($customerHardSkill)
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('Name') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        @endbind
        <x-form-submit class="mt-3">{{ __('Save and back') }}</x-form-submit>
    </x-form>
@endsection

