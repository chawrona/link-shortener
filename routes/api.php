<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get( '/link', [LinkController::class, 'index']);

Route::post('/link', [LinkController::class, 'store']);

