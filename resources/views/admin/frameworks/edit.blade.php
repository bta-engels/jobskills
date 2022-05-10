@extends('layouts.app')

@section('content')
    <x-form action="{{ route('frameworks.update', $framework) }}">
        @method('put')
        @bind($framework)
        <x-form-input name="name" label="{{ __('Name') }}" placeholer="{{ __('Framework name') }}"/>
        @endbind
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection
