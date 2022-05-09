@extends('layouts.app')

@section('content')
    <p>Update Languages</p>

    <x-form method="put" action="{{route('languages.update', $language)}}">
        @csrf
        <x-form-input type="text" class="mb-3" name="language" value="{{ $language['name'] }}" label="{{__('Language')}}:" />
        <x-form-submit class="mb-3">{{__('Update')}}</x-form-submit>
    </x-form>

@endsection