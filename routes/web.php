<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login','AuthController@adminLogin')->name('admin.login');
Route::post('/admin/logout','AuthController@adminlogout')->name('admin.logout');

Route::middleware('auth')->group(function(){

    Route::get('/admin/dashboard','AdminHomeController@index')->name('admin.index');
    
    // product resources route
    Route::resource('products', 'ProductController');
});



