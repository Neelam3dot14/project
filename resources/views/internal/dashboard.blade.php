@extends('internal.layouts.app')

@section('title', __('User Internal Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome :Name', ['name' => $logged_in_user->name])
        </x-slot>

        <x-slot name="body">
            @lang('Welcome to the Internal Dashboard')
        </x-slot>
    </x-backend.card>
@endsection
