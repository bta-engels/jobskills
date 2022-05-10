@extends('layouts.app')

@section('content')
    <x-form action="{{ route('languages.update', $language) }}">
        @method('put')
        @bind($language)
        <x-form-input name="name" label="{{ __('Name') }}"/>
        @endbind
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection
