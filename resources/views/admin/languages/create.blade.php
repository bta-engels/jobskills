@extends('layouts.app')
@section('content')
    <h1>Create Language</h1>

    <x-form method="post" action="{{ route('languages.store') }}" >
        @csrf
        <x-form-input type="text" class="mb-3" name="name" value="" label="{{ __('Language') }}:" />
        <x-form-submit class="mt-3" >{{ __('Create') }}</x-form-submit>
    </x-form>
@endsection
