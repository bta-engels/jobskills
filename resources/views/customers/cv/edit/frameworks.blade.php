@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{__('Programming language')}}</h3>

    <x-form method="post" action="{{ route('cv.frameworksStore', $customer) }}" >
        @bind($customer)
        <x-form-select name="frameworks[]" :options="$frameworks" multiple many-relation label="Select your Frameworks:"/>
        @endbind
        <x-form-submit class="mt-2">{{ __('Save') }}</x-form-submit>
    </x-form>

    @if($customer->frameworkLevels->count() > 0)
        <table class="table table-striped mt-2">
            <tr>
                <th class="w-25">{{__('Framework')}}</th>
                <th>{{__('Level')}}</th>
            </tr>
            @foreach($customer->frameworkLevels as $item)
                <tr class="vmiddle">
                    <td>{{ $item->framework->name }}</td>
                    <td>
                        <form method="post" action="{{ route('customer_frameworks.update', $item) }}">
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