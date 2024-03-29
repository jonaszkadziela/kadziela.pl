<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('hub'))->name('hub');
Route::get('/privacy', fn () => view('privacy'))->name('privacy');

Route::get('/language/{code}', [LanguageController::class, 'change']);
