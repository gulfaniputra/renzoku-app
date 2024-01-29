<?php

use App\Http\Controllers\SerialController;
use Illuminate\Support\Facades\Route;

Route::get('/serial', [SerialController::class, 'serial'])->name('serial');
