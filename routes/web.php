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
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/bank', function () {
    return view('page_bank', [
        "title" => "Marketplace"
    ]);
});
Route::get('/location', function () {
    return view('page_location', [
        "title" => "Lokasi"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Kontak"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

//Register
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);


//rute Login dan Logout
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//rute admin
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['verifikasi:admin']], function () {
    Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
    });
    Route::group(['middleware' => ['verifikasi:user']], function () {
    Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
    });
});