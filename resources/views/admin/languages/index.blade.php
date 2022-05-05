@extends('layouts.app')
@section('content')
    <h1>Languages</h1>


        <table class="table table-striped">
            @foreach($languages as $language)
            <tr>
                <td>{{ $language['id']}}</td>
                <td>{{ $language['name']}}</td>
                <td> <a class="btn btn-primary" href="{{route('admin.languages.edit', $language)}}">
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
