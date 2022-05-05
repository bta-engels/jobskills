@extends('layouts.app')

@section('content')
    <p>Hier könnte ihre Tabelle stehen (Programming Languages)</p>

    <ul>
        @foreach($programming_languages as $programming_language)
            <li>{{ $programming_language->name }}</li>
        @endforeach
    </ul>

@endsection