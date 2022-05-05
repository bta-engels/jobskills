@extends('layouts.app')

@section('content')
    <p>{{ array_keys($id)[0] }}</p>

    <p>{{ $data[array_keys($id)[0] - 1]->name }}</p>

    <x-form>
        <x-form-input name="whatever" label="{{ $data[array_keys($id)[0] - 1]->name }}"></x-form-input>
    </x-form>
@endsection