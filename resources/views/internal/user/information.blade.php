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
            <x-forms.patch :action="route('internal.internaluser.update.profile')">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-left">@lang('Name')</label>

                    <div class="col-md-8">
                        <input type="text" name="name" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') ?? $logged_in_user->name }}" required autofocus autocomplete="name" />
                    </div>
                </div><!--form-group-->

                @if ($logged_in_user->canChangeEmail())
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-left">@lang('E-mail Address')</label>

                    <div class="col-md-8">
                        <x-utils.alert type="info" class="mb-3" :dismissable="false">
                            <i class="fas fa-info-circle"></i> @lang('If you change your e-mail you will be logged out until you confirm your new e-mail address.')
                        </x-utils.alert>
                        <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') ?? $logged_in_user->email }}" required autocomplete="email" />
                    </div>
                </div><!--form-group-->
                @endif
                <div class="form-group row mb-0">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-md btn-primary" type="submit">@lang('Update')</button>
                    </div>
                </div><!--form-group-->
            </x-forms.patch>
        </x-slot>

    </x-backend.card>
@endsection
