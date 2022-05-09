@extends('layouts.app')

@section('content')
    <p>Index Programming languages</p>


    <table class="table table-striped">
        @foreach($programmingLanguages as $programmingLanguage)
            <tr>
                <td>{{ $programmingLanguage ['id'] }}</td>
                <td>{{ $programmingLanguage ['name'] }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('programming_languages.edit', $programmingLanguage) }}">
                        {{ __('Edit') }}
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger delsoft" href="{{ route('programming_languages.destroy', $programmingLanguage) }}">
                        {{ __('Delete') }}
                    </a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection