@extends('layouts.app')

@section('content')
    <x-form action="{{ route('programmingLanguages.update', $programmingLanguage) }}">
        @method('put')
        @bind($programmingLanguage)
        <x-form-input name="name" label="{{ __('Name') }}"/>
        @endbind
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection