<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\TourController;
use App\Http\Controllers\Backend\BookingController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::prefix('user')->group(function () {
        Route::get('/users',[UserController::class,"getUsers"]);
    });

    Route::prefix('package')->group(function () {
        Route::get('/packages',[PackageController::class,"getPackages"]);
        Route::post('/store',[PackageController::class,'store']);
        Route::any("/upload/image",[PackageController::class,'uploadImg']);
    });

    Route::prefix('tour')->group(function () {
        Route::get('/tours',[TourController::class,"getTours"]);
        Route::post('/store',[TourController::class,'store']);
        Route::delete('/delete/{id}',[TourController::class,'delete']);
        Route::post('/update/{id}',[TourController::class,'update']);

    });

    Route::prefix('booking')->group(function(){
        Route::get('/bookings',[BookingController::class,'getBookings']);
        Route::post('/update/status/{id}',[BookingController::class,'updateStatus']);


    });


