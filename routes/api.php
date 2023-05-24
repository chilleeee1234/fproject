<?php

use App\Http\Controllers\Api\NavigationBarController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [NavigationBarController::class, 'index']);
Route::get('/index/{id}', [NavigationBarController::class, 'show']);
Route::post('/index/', [NavigationBarController::class, 'store']);
Route::put('/index/{id}', [NavigationBarController::class, 'update']);
Route::delete('/index/{id}', [NavigationBarController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');

