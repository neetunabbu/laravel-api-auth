<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register']);  // Unprotected
Route::post('/login', [AuthController::class, 'login']);        // Unprotected

// Protected routes with rate limit (10 requests per 1 minute)
// Route::middleware('auth:sanctum')->group(function () {
// Route::get('/profile', [AuthController::class, 'profile']);  // Protected
// Route::post('/logout', [AuthController::class, 'logout']);   // Protected
// });

Route::middleware(['auth:sanctum', 'throttle:10,1'])->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
