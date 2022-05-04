@extends('layouts.app')

@section('content')
    <x-form method="post" action="{{ route('admin.languages.store') }}">
        <x-form-input name="name" label="{{ __('Name') }}"/>
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection
