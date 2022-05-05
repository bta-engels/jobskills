@extends('layouts.app')

@section('content')
    <p>Hier könnte ihre Tabelle stehen (Frameworks)</p>

    <table class="table table-striped">
        @foreach($frameworks as $framework)
        <tr>
            <td>{{ $framework->name }}</td>
        </tr>
        @endforeach
    </table>

@endsection