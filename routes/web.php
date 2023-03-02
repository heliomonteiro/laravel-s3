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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[\App\Http\Controllers\ImageController::class, 'create'])->name('create');
Route::post('/',[\App\Http\Controllers\ImageController::class, 'store'])->name('store');
Route::get('/{image}',[\App\Http\Controllers\ImageController::class, 'show'])->name('show');