<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [UserController::class,'register']);
Route::post('login', [UserController::class,'login']);
Route::put('update', [UserController::class, 'update']);
Route::get('getuser/{id}', [UserController::class,'getUser']);
Route::delete('delete/{id}', [UserController::class,'delete']);
Route::get('getusers', [UserController::class,'getUsers']);





