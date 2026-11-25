<?php

use App\Http\Controllers\Api\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — Portofolio Publik (Latihan 5a)
|--------------------------------------------------------------------------
| Otomatis berprefix /api dan memakai middleware "api" (stateless).
| URL: http://127.0.0.1:8000/api/portfolio/profile, dst.
*/

Route::prefix('portfolio')->group(function () {
    Route::get('/profile',         [PortfolioController::class, 'profile']);
    Route::get('/skills',          [PortfolioController::class, 'skills']);
    Route::get('/projects',        [PortfolioController::class, 'projects']);
    Route::get('/projects/{slug}', [PortfolioController::class, 'projectDetail']);
    Route::get('/experiences',     [PortfolioController::class, 'experiences']);
    Route::get('/certificates',    [PortfolioController::class, 'certificates']);
});
