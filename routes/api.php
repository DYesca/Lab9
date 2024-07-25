<?php

use App\Http\Controllers\API\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});
*/

Route::get('/suma/{num1}/{num2}', [ApiController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [ApiController::class, 'multiplicacion']);