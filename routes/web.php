<?php

use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('hub'))->name('hub');
Route::get('/privacy', fn () => view('privacy'))->name('privacy');

Route::get('/language/{code}', [UserSettingController::class, 'language']);
Route::get('/theme/{mode}', [UserSettingController::class, 'theme']);
