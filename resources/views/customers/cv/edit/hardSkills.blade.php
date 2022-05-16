@extends('layouts.app')

@section('sidebar')
    <x-navigation.left-menu />
@endsection

@section('content')
    <h3>{{ __('Hard skills') }}</h3>

    @if($hardSkills->count() > 0)
        <table class="table table-striped">
            @foreach($hardSkills as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <x-form action="{{ route('customer_hard_skills.destroy', $item) }}">
                            <a class="btn btn-sm btn-primary" href="{{ route('customer_hard_skills.edit', $item) }}">{{ __('Edit') }}</a>
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
        <!--a class="btn btn-primary ms-3 mt-3" href="{{ route('cv.hardSkillsEdit', $customer) }}">{{ __('Next') }}</a-->
    </x-form>
@endsection

