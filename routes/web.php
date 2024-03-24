<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('hub'))->name('hub');

Route::get('/language/{code}', [LanguageController::class, 'change']);
