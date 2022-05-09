@extends('layouts.app')

@section('content')
    <p>Index languages</p>


        <table class="table table-striped">
            @foreach($languages as $language)
            <tr>
                <td>{{ $language ['id'] }}</td>
                <td>{{ $language ['name'] }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('languages.edit', $language) }}">
                        {{ __('Edit') }}
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger delsoft" href="{{ route('languages.destroy', $language) }}">
                        {{ __('Delete') }}
                    </a>
                </td>
            </tr>
            @endforeach
        </table>


@endsection