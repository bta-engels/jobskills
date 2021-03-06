@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Projects') }}</h3>

    @if($projects->count() > 0)
        <table class="table table-striped">
            @foreach($projects as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->from->format('d.m.Y') }}</td>
                    <td>{{ $item->until->format('d.m.Y') }}</td>
                    <td>
                        <x-form action="{{ route('customer_projects.destroy', $item) }}">
                            <a class="btn btn-sm btn-primary" href="{{ route('customer_projects.edit', $item) }}">{{ __('Edit') }}</a>
                            @method('delete')
                            <x-form-submit class="btn btn-sm btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                        </x-form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <x-form method="post" action="{{ route('cv.projectsStore', $customer) }}">
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('Project') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-input type="date" class="mb-3" name="from" label="{{ __('From') }}" />
        <x-form-input type="date" class="mb-3" name="until" label="{{ __('Until') }}" />
        <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
        <a class="btn btn-primary ms-3 mt-3" href="{{ route('cv.projectsStore', $customer) }}">{{ __('Next') }}</a>
    </x-form>
@endsection
