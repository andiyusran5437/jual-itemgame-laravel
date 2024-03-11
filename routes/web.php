<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/content',[App\Http\Controllers\ContentController::class,'index']);
Route::post('/content',[App\Http\Controllers\ContentController::class,'store']);
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index']);