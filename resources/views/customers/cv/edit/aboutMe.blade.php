@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3> {{ __('About me') }}</h3>
    @if($customer->img)
        <img src="{{ asset('storage/images/' . $customer->img) }}" height="200" alt="">
    @endif
    <x-form method="post" action="{{ route('cv.aboutMeStore', $customer) }}" enctype="multipart/form-data" >
        @bind($customer)
        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Profile image') }}" />
        <x-form-textarea class="mb-3" name="about_me" label="{{ __('About me') }}" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
        @endbind
    </x-form>
@endsection

