<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

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
    return view('index', [
        "title" => "Home"
    ]);
});
//Register
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);


//rute Login dan Logout
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//rute user dan admin 
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['verifikasi:admin']], function () {
        Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('user', 'App\Http\Controllers\UserController@index')->name('Home');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('about_user', 'App\Http\Controllers\UserController@about')->name('About');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('page-location-user', 'App\Http\Controllers\UserController@page_location')->name('Lokasi');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('page-market-user', 'App\Http\Controllers\UserController@page_bank')->name('MarketPlace');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
        Route::get('contact-user', 'App\Http\Controllers\UserController@contact')->name('Contact');
    });
});
