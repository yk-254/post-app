<?php

use App\Http\Controllers\api\v1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
