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

@if($languagesLevels->count() > 0)
    <div class="mt-3">
        @foreach($languagesLevels as $item)
            <x-form action="{{ route('customer_languages.update', $item) }}">
                @method('put')
                <span>{{ $item->language->name }}</span>
                @bind($item)
                <x-form-input floating class="form-range w-25 form-floating d-inline-flex" type="range" name="level" label="{{ __('Level') }}" min="0" max="10" step="1" />
                @endbind
                <x-form-submit floating class="btn btn-sm d-inline-flex">{{ __('Save') }}</x-form-submit>
            </x-form>
        @endforeach
    </div>
@endif
@endsection
