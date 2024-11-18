<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;

Route::get('/', [TagController::class, 'home'])->name('Home');

Route::get('linguaggio/{nomeLinguaggio}', [TagController::class, 'show'])->name('show');
