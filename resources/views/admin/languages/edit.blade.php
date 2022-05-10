@extends('layouts.app')
<<<<<<< HEAD
@section('content')
<h1>Update Language</h1>

<x-form action="{{ route('languages.update', $language) }}" >
    @method('put')
    <x-form-input type="text" class="mb-3" name="name" value="{{ $language['name']}}" label="{{ __('Language') }}:" />
    <x-form-submit class="mt-3" >{{ __('Update') }}</x-form-submit>
</x-form>
=======

@section('content')
    <x-form action="{{ route('languages.update', $language) }}">
        @method('put')
        @bind($language)
        <x-form-input name="name" label="{{ __('Name') }}"/>
        @endbind
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
>>>>>>> main
@endsection
