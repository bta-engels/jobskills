@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
<!--p>Hat funktioniert</p-->
<x-form method="post" action="{{ route('cv.languagesStore', $customer) }}">
    @bind($customer)
    <x-form-select class="mb-3" name="languages[]" label="{{ __('Languages') }}"
        :options="$languages" multiple many-relation
    />
    @endbind
    <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
</x-form>

@endsection
