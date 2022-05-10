@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Education') }}</h3>



    <x-form method="post" action="{{route('cv.educationStore', $customer) }}">
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('School') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-input type="date" class="mb-3" name="from" label="{{ __('From') }}" />
        <x-form-input type="date" class="mb-3" name="until" label="{{ __('Until') }}" />
        <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
    </x-form>
@endsection
