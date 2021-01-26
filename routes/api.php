<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/unauthenticated', function(){
    return response()->json(['error' => 'Unauthorized'], 401);
})->name('login');

Route::post('create/user', [AuthController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);