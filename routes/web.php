<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\RoleController as AdminRole;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\SettingController as AdminSetting;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(["middleware" => ['auth:sanctum', 'verified']], function () {

    // User Area 
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // Admin Area
    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

        // Settings
        Route::get('settings/remove/{id}', [AdminSetting::class, 'remove'])->name('settings.update');
        Route::get('settings', [AdminSetting::class, 'index'])->name('settings.update');
        Route::post('settings', [AdminSetting::class, 'update'])->name('settings.update');

        // Roles and Permissions 
        Route::get('roles/reload-permissions/{id}', [AdminRole::class, 'reloadPermissions'])->name('roles.update');
        Route::get('roles/reload-permissions', [AdminRole::class, 'reloadPermissions'])->name('roles.update');
        Route::resource('roles', AdminRole::class);

        // Users 
        Route::resource('users', AdminUser::class);

        // Profiles 
        Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    });
});
