@extends('layouts.app')

@section('content')

<x-form method="put" action="{{ route('languages.update', $language) }}">
    @csrf
    <x-form-input type="text" class="mb-3" name="name" value="{{ $language['name'] }}" label="{{ __('Language') }}:" />
    <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
</x-form>

@endsection