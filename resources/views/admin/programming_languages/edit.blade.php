@extends('layouts.app')

@section('content')
    <p>Update Programming Language</p>

    <x-form method="put" action="{{route('languages.update', $programmingLanguage)}}">
        @csrf
        <x-form-input type="text" class="mb-3" name="programmingLanguage" value="{{ $programmingLanguage['name'] }}" label="{{__('Programming Language')}}:" />
        <x-form-submit class="mb-3">{{__('Update')}}</x-form-submit>
    </x-form>

@endsection