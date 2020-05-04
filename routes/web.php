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

Route::get('/home', 'HomeController@index');
Route::get('/main/profile', 'ProfileController@index');
Route::resource('/main/profile', 'ProfileController');

// // Route::get('/home', 'AdminController@admin')->name('home');
// Route::resource('admin/members', 'porn\\membersController');








Route::middleware(['auth'])->group(function () {
    //common routes will goes here
    Route::middleware(['is_admin'])->group(function () { //admin routes will goes here
        Route::resource('admin/payments', 'porn\\paymentsController');
        Route::resource('admin/addtime', 'porn\\addtimeController');
        Route::resource('admin/members', 'porn\\membersController');
        Route::resource('admin/packages', 'Admin\\packagesController');
        Route::get('/admin', 'AdminController@admin');
    });

    Route::middleware(['editor'])->group(function () {
        //editor routes goes here.
    });
});
