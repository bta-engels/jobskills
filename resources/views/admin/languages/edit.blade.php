@extends('layouts.app')
@section('content')
<h1>Update Language</h1>

<x-form method="post" action="/update" >
    @csrf
    <x-form-input type="text" class="mb-3" name="framework" value="{{ $language['name']}}" label="{{ __('Language') }}:" />
    <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
</x-form>
@endsection
