@extends('layouts.app')
@section('content')
    <h1>Update Framework</h1>

    <x-form method="put" action="{{ route('frameworks.update', $framework) }}" >
        @csrf
        <x-form-input type="text" class="mb-3" name="name" value="{{ $framework['name']}}" label="{{ __('Framework') }}:" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
    </x-form>
@endsection
