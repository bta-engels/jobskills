@extends('layouts.app')

@section('content')
    <x-form method="post" action="{{ route('admin.frameworks.store') }}">
        <x-form-input name="name" label="{{ __('Name') }}" placeholer="{{ __('Framework name') }}"/>
        <x-form-submit class="mt-3">{{ __('Save') }}</x-form-submit>
    </x-form>
@endsection
