@extends('layouts.app')
@section('content')

    <h1>Programming Languages</h1>

    <div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('programming_languages.create') }}">
            {{ __('Add New Programming Language') }}
        </a>
    </div>
    {{ $programmingLanguages->links() }}
    <table class="table table-striped">
        @foreach($programmingLanguages as $programmingLanguage)
            <tr>
                <td>{{ $programmingLanguage->name }}</td>
                <td>
                    <x-form action="{{ route('programming_languages.destroy', $programmingLanguage) }}" method="post">
                        <a class="btn btn-primary" href="{{ route('programming_languages.edit', $programmingLanguage) }}">{{ __('Edit') }}</a>
                        @method('delete')
                        <x-form-submit class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                    </x-form>
                </td>

        @endforeach
    </table>
    {{ $programmingLanguages->links() }}
@endsection
