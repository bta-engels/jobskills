@extends('layouts.app')
@section('content')
    <h1>Languages</h1>

    <div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('languages.create') }}">
            {{ __('Add New Language') }}
        </a>
    </div>

        <table class="table table-striped">
            @foreach($languages as $language)
            <tr>
                <td>{{ $language->name }}</td>
                <td>
                    <form action="{{ route('languages.destroy', $language) }}">
                        <a class="btn btn-primary" href="{{ route('languages.edit', $language) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </table>
@endsection
