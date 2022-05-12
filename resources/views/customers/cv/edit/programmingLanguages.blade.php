@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{__('Programming language')}}</h3>

    <x-form method="post" action="{{ route('cv.programmingLanguagesStore', $customer) }}" >
        @bind($customer)
        <x-form-select name="programmingLanguages[]" :options="$programmingLanguages" multiple many-relation label="Select your Languages:"/>
        @endbind
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
    </x-form>

    @if($customer->programmingLanguageLevels->count() > 0)
        <table class="table table-striped mt-2">
            <tr>
                <th class="w-25">{{__('Programming Language')}}</th>
                <th>{{__('Level')}}</th>
            </tr>
            @foreach($customer->programmingLanguageLevels as $item)
                <tr class="vmiddle">
                    <td>{{ $item->programmingLanguage->name }}</td>
                    <td>
                        <form method="post" action="{{ route('customer_programming_languages.update', $item) }}">
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
    <a class="btn btn-primary" href="{{ route('cv.frameworksEdit', $customer) }}">{{ __('Next') }}</a>
@endsection
