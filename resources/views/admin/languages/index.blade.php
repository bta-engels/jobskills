@extends('layouts.app')

@section('content')
    <p>Hier könnte ihre Tabelle stehen (Languages)</p>

    <table class="table table-striped">
        @foreach($languages as $language)
        <tr>
            <td>{{ $language->name }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('languages.edit', $language) }}">
                    {{ __('Edit') }}
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{ route('languages.destroy', $language) }}">
                    {{ __('Remove') }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection