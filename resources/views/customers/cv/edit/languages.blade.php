@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Language') }}</h3>

    <x-form method="post" action="{{ route('cv.languagesStore', $customer) }}">
        @bind($customer)
        <x-form-select name="languages[]" multiple may-relation :options="$languages" label="{{ __('Select your Languages:') }}"/>
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
                    <td>
                        <form method="post" action="{{ route('customer_languages.update', $item) }}">
                            @csrf
                            @method('put')
                            <input type="range" name="level" value="{{ $item->level }}" steps="1" min="1" max="10">
                            <button class="btn btn-sm btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif


@endsection
