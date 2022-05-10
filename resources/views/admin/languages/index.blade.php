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
                    <x-form action="{{ route('languages.destroy', $language) }}" method="post">
                        <a class="btn btn-primary" href="{{ route('languages.edit', $language) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <x-form-submit type="submit" class="btn btn-danger delsoft" >{{ __('Delete') }}</x-form-submit>

                    </x-form>
                </td>
            </tr>
            @endforeach
        </table>
@endsection
