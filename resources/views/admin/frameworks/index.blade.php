@extends('layouts.app')
@section('content')
    <h1>Frameworks</h1>


    <table class="table table-striped">
        @foreach($frameworks as $framework)
            <tr>
                <td>{{ $framework['id']}}</td>
                <td>{{ $framework['name']}}</td>
                <td> <a class="btn btn-primary" href="">
                        {{ __('Edit') }}
                    </a></td>
                <td> <a class="btn btn-danger" href="">
                        {{ __('Delete') }}
                    </a></td>

        @endforeach
    </table>

    <div>
        <a class="btn btn-primary" href="">
            {{ __('Add') }}
        </a>
    </div>
@endsection
