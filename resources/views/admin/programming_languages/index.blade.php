@extends('layouts.app')
@section('content')
    <h1>Programming Languages</h1>


    <table class="table table-striped">
        @foreach($programmingLanguages as $programmingLanguage)
            <tr>
                <td>{{ $programmingLanguage['id']}}</td>
                <td>{{ $programmingLanguage['name']}}</td>
                <td> <a class="btn btn-primary" href="{{route('admin.programming_languages.edit', $programmingLanguage)}}">
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
