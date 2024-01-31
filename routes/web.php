<?php

use App\Http\Controllers\SerialsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SerialsController::class, 'index']);
Route::get('/serials/{serial}', [SerialsController::class, 'show']);
