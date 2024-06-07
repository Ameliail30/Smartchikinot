<?php

namespace App\Http\Controllers;

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

Route::get('/login',[AuthController::class, 'index'])->name('login');

Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/logout',[AuthController::class, 'logout']);

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
         return view('content.dashboard.index');
    })->name('dashboard');
    // Route::resource('config.lamp',ConfigLampController::class);
    // Route::resource('config.heater',ConfigHeaterController::class);
    Route::middleware('role:admin')->prefix('manage')->group(function(){
    Route::resource('devices',DeviceController::class);
    Route::resource('users',UserController::class);
});

});