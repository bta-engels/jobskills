@extends('layouts.app')
<<<<<<< HEAD
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
                <td>{{ $language['name']}}</td>
                <td>
                    <form action="{{ route('languages.destroy', $language) }}">
                        <a class="btn btn-primary" href="{{ route('languages.edit', $language) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

                    </form>
                </td>

            @endforeach
        </table>
=======

@section('content')
    <h3>{{ __('Languages') }}</h3>
    <div>
        <a class="btn btn-primary"
           href="{{ route('languages.create') }}">{{ __('Create new item') }}</a>
    </div>
    {{ $data->links() }}
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a class="btn btn-sm btn-primary me-3"
                       href="{{ route('languages.edit', $item) }}"
                    >{{ __('edit') }}</a>
                    <x-form class="d-inline m-0 p-9" action="{{ route('languages.destroy', $item) }}">
                        @method('delete')
                        <x-form-submit class="btn btn-sm btn-danger me-3 delsoft">{{ __('delete') }}</x-form-submit>
                    </x-form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
>>>>>>> main
@endsection
