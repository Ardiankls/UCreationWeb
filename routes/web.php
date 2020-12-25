<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});

//Route::get('login', function () {
//    return redirect()->route('auth.login');
//});

Auth::routes();
Route::resource('creation', \App\Http\Controllers\CreationController::class);
//Route::view('create', 'student.creation.create')->name('createCreation');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
