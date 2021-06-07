<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PackageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[FrontEndController::class,'index'])->name('index');
Route::get('/about-us',[FrontEndController::class,'aboutUs'])->name('about');
Route::get('/packages',[FrontEndController::class,'packages'])->name('packages');

Route::get('/contactus',[FrontEndController::class,'contactus'])->name('contactus');
Route::post('/contactus',[FrontEndController::class,'sendMessage'])->name('send.message');
Route::get('/all/packages',[TourPackageController::class,'index'])->name('all.packages');
Route::get('/all/tours',[TourController::class,'index'])->name('all.tours');
Auth::routes();


// Dashboard Apis

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');



Route::prefix('member')->name('member')->group(function () {
        Route::get('/dashboard',[MemberController::class,'index']);
});
