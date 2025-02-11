<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get( 'api/link', [LinkController::class, 'index']);

Route::post('api/link', [LinkController::class, 'store']);

