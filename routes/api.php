<?php

use App\Http\Controllers\Api\CreationController as CreationControllerApi;
use App\Http\Controllers\Api\UserController as UserControllerApi;
use App\Http\Resources\Api\UserResource as UserResourceApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;

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
Route::post('api-login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('creations', CreationControllerApi::class);
    Route::apiResource('profile', UserControllerApi::class);
    Route::post('api-logout', [LoginController::class, 'logout']);


});
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
