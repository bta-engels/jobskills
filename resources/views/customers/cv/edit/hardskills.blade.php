@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Hard Skills') }}</h3>

    @if($hardskills->count() > 0)
        <table class="table table-striped">
            @foreach($hardskills as $hardskill)
                <tr>
                    <td>{{ $hardskill->name }}</td>
                    <td>{{ $hardskill->description}}</td>
                    <td>
                        <x-form action="{{ route('customer_hardskills.destroy', $hardskill) }}">
                            <a class="btn btn-sm btn-primary" href="{{ route('customer_hardskills.edit', $hardskill) }}">{{ __('Edit') }}</a>
                            @method('delete')
                            <x-form-submit class="btn btn-sm btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                        </x-form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <x-form method="post" action="{{ route('cv.hardSkillsStore', $customer) }}">
        <x-form-input type="text" class="mb-3" name="name" label="{{ __('Name') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
    </x-form>
@endsection
