<?php

use App\Http\Controllers\UserRegestrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/v1/user', UserRegestrationController::class);