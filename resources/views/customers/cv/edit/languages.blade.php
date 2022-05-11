@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <x-form method="post" action="{{ route('cv.languagesStore', $customer) }}">
        @bind($customer)
        <x-form-select name="languages[]" :options="$languages" multiple many-relation />
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
        @endbind
    </x-form>

    <!-- tabellarische ausgabe  der languageLevels -->
@endsection
