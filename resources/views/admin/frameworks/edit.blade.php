@extends('layouts.app')

@section('content')
    <p>Update Frameworks</p>
    <x-form action="{{route('frameworks.update', $framework)}}">
        @method('put')
        <x-form-input type="text" class="mb-3" name="name" value="{{ $framework['name'] }}" label="{{__('Framework')}}:" />
        <x-form-submit class="mb-3">{{__('Update')}}</x-form-submit>
    </x-form>

@endsection