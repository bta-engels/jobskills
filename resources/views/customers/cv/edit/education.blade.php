@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Education') }}</h3>

    @if($educations->count() > 0)
        <table class="table table-striped">
            @foreach($educations as $education)
                <tr>
                    <td>{{ $education->name }}</td>
                    <td>{{ $education->from->format('d.m.Y') }}</td>
                    <td>{{ $education->until->format('d.m.Y') }}</td>
                    <td>
                        <x-form action="{{ route('customer_educations.destroy', $education) }}">
                            <a class="btn btn-sm btn-primary" href="{{ route('customer_educations.edit', $education) }}">{{ __('Edit') }}</a>
                            @method('delete')
                            <x-form-submit class="btn btn-sm btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                        </x-form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <x-form method="post" action="{{ route('cv.educationStore', $customer) }}">
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('School') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-input type="date" class="mb-3" name="from" label="{{ __('From') }}" />
        <x-form-input type="date" class="mb-3" name="until" label="{{ __('Until') }}" />
        <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
    </x-form>
@endsection
