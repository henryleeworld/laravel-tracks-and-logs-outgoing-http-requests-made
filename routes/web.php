<?php

use App\Http\Controllers\GitHubController;
use Illuminate\Support\Facades\Route;

Route::get('github/spy/', [GitHubController::class, 'spy']);
