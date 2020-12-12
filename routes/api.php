<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//前台 user api 用的路由 網址看起來就像 https://localhost/api/{名稱}
use App\Http\Controllers\API\UserLoginController;
Route::post('login', [UserLoginController::class , 'login']);
Route::post('logout', [UserLoginController::class , 'logout']);
Route::post('refresh', [UserLoginController::class , 'refresh']);
Route::post('me', [UserLoginController::class , 'me']);
Route::post('list', [UserLoginController::class , 'list']);

//後台 admin api 用的路由 網址看起來就像 https://localhost/api/admin/{名稱}
use App\Http\Controllers\API\Admin\AdminLoginController;
Route::prefix('admin')->group(function() {
    Route::post('login', [AdminLoginController::class , 'login']);
    Route::post('logout', [AdminLoginController::class , 'logout']);
    Route::post('refresh', [AdminLoginController::class , 'refresh']);
    Route::post('me', [AdminLoginController::class , 'me']);
    Route::post('list', [AdminLoginController::class , 'list']);
});
