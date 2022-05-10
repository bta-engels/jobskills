@extends('layouts.app')
<<<<<<< HEAD
@section('content')
    <h1>Frameworks</h1>

    <div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('frameworks.create') }}">
            {{ __('Add New Framework') }}
        </a>
    </div>

    <table class="table table-striped">
        @foreach($frameworks as $framework)
            <tr>
                <td>{{ $framework['name']}}</td>
                <td>
                    <form action="{{ route('frameworks.destroy', $framework) }}" method="post">
                        <a class="btn btn-primary" href="{{ route('frameworks.edit', $framework) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>

        @endforeach
    </table>
=======

@section('content')
    <h3>{{ __('Frameworks') }}</h3>
    <div>
        <a class="btn btn-primary"
           href="{{ route('frameworks.create') }}">{{ __('Create new item') }}</a>
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
                       href="{{ route('frameworks.edit', $item) }}"
                    >{{ __('edit') }}</a>
                    <x-form class="d-inline m-0 p-9" action="{{ route('frameworks.destroy', $item) }}">
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
