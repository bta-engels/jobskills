@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3> {{ __('About me') }}</h3>
    @if($customer->img)
        <div class="d-flex justify-content-left">
    <img src="{{ asset('storage/images/' . $customer->img) }}" height="200 " style="width: 200px; height: 200px; border-radius: 50%;   ">
        </div>
    @endif

    <x-form method="post" action="{{ route('cv.aboutMeStore', $customer) }}" enctype="multipart/form-data" >
        @bind($customer)
        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Profile image') }}" />
        <x-form-textarea class="mb-3" name="about_me" label="{{ __('About me') }}" />
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
        @endbind
    </x-form>
@endsection

