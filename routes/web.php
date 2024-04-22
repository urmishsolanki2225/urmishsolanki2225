<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/user-profile', [App\Http\Controllers\HomeController::class, 'user_profile'])->name('admin.user-profile');
Route::get('admin/fetch/user', [App\Http\Controllers\Admin\UserController::class, 'fetchUser'])->name('fetch.user');
