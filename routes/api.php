<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskApiController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/tasks', [TaskApiController::class, 'index']);
    Route::post('/tasks', [TaskApiController::class, 'store']);
    Route::put('/tasks/{id}', [TaskApiController::class, 'update']);
    Route::delete('/tasks/{id}', [TaskApiController::class, 'destroy']);
});