<?php
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

require base_path('routes/api.php');

Route::view('/', 'app');

Route::view('/links', 'app');

Route::view('/notfound', 'app');

Route::get('/{$shortened_url}', [LinkController::class, 'redirect']);
