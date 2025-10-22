<?php

use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/github/{username}', [TrackController::class, 'github']);
    Route::get('/dog', [TrackController::class, 'dog']);
    Route::post('/signup', [TrackController::class, 'signup']);
    /*
    Route::get('/ping', fn () => response()->json(['ok' => true]));
    Route::get('/api/health', fn () => response()->json(['status' => 'healthy']));
    */
});
