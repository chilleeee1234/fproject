<?php

use App\Http\Controllers\Api\AuthController;
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


Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/user', [UserController::class, 'store'])    ->name('user.store');

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);


    Route::controller(NavigationBarController::class)->group(function(){
        Route::get('/index',        'index');
        Route::get('/index/{id}',   'show');
        Route::post('/index/',      'store');
        Route::put('/index/{id}',   'update');
        Route::delete('/index/{id}','destroy');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/user',                 'index');
        Route::delete('/user/{id}',         'destroy');
        Route::get('/user/{id}',            'show');
        
        Route::put('/user/{id}',            'update')   ->name('user.update');
        Route::put('/user/email/{id}',      'email')    ->name('user.email');
        Route::put('/user/password/{id}',   'password') ->name('user.password');
    });

   


});




// Route::get('/user', [UserController::class, 'index']);
// Route::delete('/user/{id}', [UserController::class, 'destroy']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::post('/user/', [UserController::class, 'store'])->name('user.store');
// Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
// Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
// Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');

