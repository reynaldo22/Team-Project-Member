<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/pay','HomeController@payment');
Route::post('/home/pay', 'HomeController@paymentUpload');
//Admin
Route::get('/admin','AdminController@index')->middleware('auth','checkAdmin'); // check admin
Route::get('/admin/{id}/edit','AdminController@edit')->middleware('auth','checkAdmin'); // check admin
Route::get('/admin/{id}/delete','AdminController@destroy'); // delete users
Route::post('/admin/{id}/update','AdminController@update'); // update users
Route::get('/admin/role','AdminController@roles')->middleware('auth','checkAdmin');
Route::post('/admin/role/add-role','AdminController@addRole'); // tambah role
Route::get('/admin/role/{id}/delete-role','AdminController@deleteRole'); // delete role
Route::get('/admin/payment','AdminController@payment')->middleware('auth','checkAdmin');