<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/user/{id?}', [UserController::class, 'user']);
Route::get('/name/{name?}', [UserController::class, 'name']);
Route::get('/user/{id}/name/{name?}', [UserController::class, 'show']);
Route::prefix('category')->group(function () {
    Route::get('/food-beverages', [ProductController::class, 'showfoodBeverages']);
    Route::get('/beauty-health', [ProductController::class, 'showbeautyHealth']);
    Route::get('/home-care', [ProductController::class, 'showhomeCare']);
    Route::get('/baby-kid', [ProductController::class, 'showbabyKid']);
});
Route::get('/sales', [PenjualanController::class, 'sales']);
