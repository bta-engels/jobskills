@extends('layouts.app')
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
@endsection
