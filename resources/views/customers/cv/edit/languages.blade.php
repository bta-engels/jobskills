@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Language') }}</h3>

    <x-form method="post" action="{{ route('cv.languagesStore', $customer) }}">
        @bind($customer)
        <x-form-select name="languages[]" multiple may-relation :options="$languages" label="Select your Languages:"/>
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
        @endbind
    </x-form>

    @if($customer->languageLevels->count() > 0)
        <table class="table table-striped mt-2" >
            <tr>
                <th>{{__('Language')}}</th>
                <th>{{__('Level')}}</th>
            </tr>
            @foreach($customer->languageLevels as $item)
                <tr>
                    <td>{{ $item->language->name }}</td>
                    <td>{{ $item->level }}</td>
                </tr>
            @endforeach
        </table>
    @endif

@endsection
