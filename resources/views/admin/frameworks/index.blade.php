@extends('layouts.app')

@section('content')
    <p>Index Frameworks</p>

    <table class="table table-striped">
        @foreach($frameworks as $framework)
            <tr>
                <td>{{ $framework ['name'] }}</td>
                <td>
                    <form action=""></form>
                    <a class="btn btn-primary" href="{{ route('frameworks.edit', $framework) }}">
                        {{ __('Edit') }}
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{ route('frameworks.destroy', $framework) }}">
                        {{ __('Delete') }}
                    </a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection