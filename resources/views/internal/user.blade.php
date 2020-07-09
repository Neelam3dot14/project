@extends('internal.layouts.app')

@section('title', __('My Account'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <x-frontend.card>
                <x-slot name="header">
                    @lang('My Account')
                </x-slot>

                <x-slot name="body">
                    <div class="row">
                      
                        <div class="col-9">
                            <div class="tab-content" id="my-profile-tabsContent">
                                <div class="tab-pane fade show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                                    @include('frontend.user.account.tabs.profile')
                                </div><!--tab-profile-->

                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                    @include('frontend.user.account.tabs.information')
                                </div><!--tab-information-->

                                @if (! $logged_in_user->isSocial())
                                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                        @include('frontend.user.account.tabs.password')
                                    </div><!--tab-password-->
                                @endif

                                <div class="tab-pane fade" id="two-factor-authentication" role="tabpanel" aria-labelledby="two-factor-authentication-tab">
                                    @include('frontend.user.account.tabs.two-factor-authentication')
                                </div><!--tab-information-->
                            </div><!--tab-content-->
                        </div><!--col-9-->
                    </div><!--row-->
                </x-slot>
            </x-frontend.card>
        </div><!--col-md-10-->
    </div><!--row-->
@endsection
