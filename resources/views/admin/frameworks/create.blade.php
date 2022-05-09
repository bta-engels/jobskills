@extends('layouts.app')
@section('content')
    <h1>Create Framework</h1>

    <x-form method="post" action="{{ route('frameworks.store') }}" >
        @csrf
        <x-form-input type="text" class="mb-3" name="name" value="" label="{{ __('Framework') }}:" />
        <x-form-submit class="mt-3" >{{ __('Create') }}</x-form-submit>
    </x-form>
@endsection