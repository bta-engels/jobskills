@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{__('Language')}}</h3>

    <x-form method="post" action="{{ route('cv.languagesStore', $customer) }}" >
        @bind($customer)
        <x-form-select name="languages[]" :options="$languages" multiple many-relation label="Select your Languages:"/>
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
        @endbind
    </x-form>

    @if($customer->languageLevels->count() > 0)
        <table class="table table-striped mt-2">
            <tr>
                <th class="w-25">{{__('Language')}}</th>
                <th>{{__('Level')}}</th>
            </tr>
            @foreach($customer->languageLevels as $item)
                <tr class="vmiddle">
                    <td>{{ $item->language->name }}</td>
                    <td>
                        <form method="post" action="{{ route('customer_languages.update', $item) }}">
                            @csrf
                            @method('put')
                            <input type="range" name="level" value="{{ $item->level }}" steps="1" min="0" max="10" />
                            <button class="btn btn-sm btn-primary ms-1">{{ __('Submit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    <a class="btn btn-primary" href="{{ route('cv.programmingLanguagesEdit', $customer) }}">{{ __('Next') }}</a>
@endsection
