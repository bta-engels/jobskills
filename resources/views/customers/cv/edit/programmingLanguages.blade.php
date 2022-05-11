@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{__('Programming language')}}</h3>

    <x-form method="post" action="{{ route('cv.programmingLanguagesStore', $customer) }}" >
        @bind($customer)
        <x-form-select name="programmingLanguages[]" :options="$programmingLanguages" multiple many-relation label="Select your Languages:"/>
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
        @endbind
    </x-form>

    @if($customer->programmingLanguageLevels->count() > 0)
        <table class="table table-striped mt-2">
            <tr>
                <th>{{__('Programming Language')}}</th>
                <th>{{__('Level')}}</th>
            </tr>
            @foreach($customer->programmingLanguageLevels as $item)
                <tr>
                    <td>{{ $item->programmingLanguage->name }}</td>
                    <td>
                        <form method="post" action="{{ route('customer_programming_languages.update', $item) }}">
                            @csrf
                            @method('put')
                            <input type="range" name="level" value="{{ $item->level }}" steps="1" min="1" max="10" >
                            <button class="btn btn-sm btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
