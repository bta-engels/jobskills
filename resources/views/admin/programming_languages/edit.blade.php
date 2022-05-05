@extends('layouts.app')
@section('content')
    <h1>Update Programming Language</h1>

    <x-form method="post" action="/update" >
        @csrf
        <x-form-input type="text" class="mb-3" name="programmingLanguage" value="{{ $programmingLanguage['name']}}" label="{{ __('Programming Language') }}:" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
    </x-form>
@endsection
