<?php

namespace App\Domains\Auth\Http\Controllers\Internal\User;

use App\Http\Controllers\Controller;
use App\Domains\Auth\Services\UserService;
use App\Domains\Auth\Http\Requests\Frontend\User\UpdateProfileRequest;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.user.profile');
    }

    public function edit()
    {
        return view('internal.user.information');
    }

    public function update(UpdateProfileRequest $request, UserService $userService)
    {
        $userService->updateProfile($request->user(), $request->validated());

        if (session()->has('resent')) {
            return redirect()->route('frontend.auth.verification.notice')->withFlashInfo(__('You must confirm your new e-mail address before you can go any further.'));
        }

        return redirect()->route('internal.internaluser.editprofile')->withFlashSuccess(__('User Profile successfully updated.'));
    }

    public function changePassword()
    {
        return view('internal.user.password');
    }
    
    public function two_factor_auth()
    {
        return view('internal.user.two-factor-authentication');
    }
    
}
