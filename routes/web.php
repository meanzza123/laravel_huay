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

Auth::routes();
// Route::get('/home', 'HomeController@index', 'AdminController@admin')
//      ->middleware('is_admin')
//     ->name('admin');

Route::get('/home', 'HomeController@index')->name('home');


// // Route::get('/home', 'AdminController@admin')->name('home');
// Route::resource('admin/members', 'porn\\membersController');
Route::resource('admin/members', 'porn\\membersController');
// Route::get('/admin', 'AdminController@admin');


// Route::get('/admin', function () {
//     return view('/admin/dashboard');
// });

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::resource('admin/payments', 'porn\\paymentsController');

Route::resource('admin/addtime', 'porn\\addtimeController');
Route::resource('admin/packages', 'Admin\\packagesController');


