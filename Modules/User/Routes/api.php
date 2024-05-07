<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Modules\User\Http\Controllers\AuthController;
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

Route::post('/login', [AuthController::class,'postLogin'])->name('login')->middleware('guest');

Route::middleware('auth:sanctum')->group(function(){
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', function (Request $request) {
        dd($request);
    })->name('logout');
    


    


})->name('user.');