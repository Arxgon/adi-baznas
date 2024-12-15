<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\YearDataController;
use App\Http\Controllers\Api\AttendanceLeaderController;
use App\Http\Controllers\Api\RunningTextController;
use App\Http\Controllers\Api\AdsImageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/year/{year}/monthly-collections', [YearDataController::class, 'getMonthlyCollections']);
Route::get('/year/{year}/monthly-distributions', [YearDataController::class, 'getMonthlyDistributions']);
Route::get('/years/{year}/monthly-data', [YearDataController::class, 'getMonthlyData']);
route::get('/attendance-leaders', [AttendanceLeaderController::class, 'index']);
route::get('/news', [RunningTextController::class, 'index']);
route::get('/ads', [AdsImageController::class, 'index']);
