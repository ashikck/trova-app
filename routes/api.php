<?php

use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/services', [ServiceController::class, 'index']);
Route::apiResource('Bookings', BookingController::class);
Route::get('/bookings/status/{service}/{status}', [BookingController::class, 'status']);
Route::post('/status/{id}', [BookingController::class, 'updateStatus']);
