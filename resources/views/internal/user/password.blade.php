@extends('internal.layouts.app')

@section('title', __('View User'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View User')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('internal.internaluser.dashboard')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            @include('frontend.user.account.tabs.password')
        </x-slot>

    </x-backend.card>
@endsection
