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
    return view('reg');
});

//Route::get('/generate_password2', function () {
//    return Hash::make('D0wnload1');
//});

//Route::get('/apply/{id}', 'RegistrationController@viewForm');
//Route::get('/apply', function () {
 //   return view('welcome');
//});

Route::get('/thanks', function () {
    return view('thank');
});
Route::post('/registeration', 'RegistrationController@addApplicant');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
