<?php
use Tabuna\Breadcrumbs\Trail;
use App\Domains\Auth\Http\Controllers\Internal\DashboardController;
use App\Domains\Auth\Http\Controllers\Internal\User\UserController;


Route::view('welcome_user', 'internal.user');
/*
 * These internal controllers require the user to be logged in
 * All route names are prefixed with 'internal.'
 * These routes can not be hit if the user has not confirmed their email
 */
Route::group(['as' => 'internaluser.', 'middleware' => ['auth', 'password.expires', config('boilerplate.access.middleware.verified')]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Home'), route('internal.internaluser.dashboard'));
    });
    Route::get('myprofile', [UserController::class, 'index'])->name('profile')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('My Profile'), route('internal.internaluser.profile'));
    });
    Route::get('editprofile', [UserController::class, 'edit'])->name('editprofile')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Edit Profile'), route('internal.internaluser.editprofile'));
    });
    Route::patch('updateprofile', [UserController::class, 'update'])->name('update.profile');

    Route::get('password', [UserController::class, 'changePassword'])->name('change_password')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Change Password'), route('internal.internaluser.change_password'));
    });
    Route::get('2fauth', [UserController::class, 'two_factor_auth'])->name('2fauth')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Two Factor Authentication'), route('internal.internaluser.2fauth'));
    });

});
