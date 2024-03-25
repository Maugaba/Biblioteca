<?php

use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\LoginController@showLoginForm')->name('loginForm');
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/register', 'App\Http\Controllers\LoginController@register')->name('register');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'client'], function () {
        Route::get('/', 'App\Http\Controllers\ClientController@index')->name('clients');
        Route::post('/clients/all', 'App\Http\Controllers\ClientController@getAll')->name('clients.getAll');
        Route::get('/create', 'App\Http\Controllers\ClientController@create')->name('clients.create');
        Route::post('/store', 'App\Http\Controllers\ClientController@store')->name('clients.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\ClientController@edit')->name('clients.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\ClientController@update')->name('clients.update');
        Route::get('/change/{id}', 'App\Http\Controllers\ClientController@change')->name('clients.change');
    });

    Route::group(['prefix' => 'book'], function () {
        Route::get('/', 'App\Http\Controllers\BookController@index')->name('books');
        Route::get('/create', 'App\Http\Controllers\BookController@create')->name('books.create');
        Route::post('/store', 'App\Http\Controllers\BookController@store')->name('books.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('books.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\BookController@update')->name('books.update');
        Route::get('/change/{id}', 'App\Http\Controllers\BookController@change')->name('books.change');
        Route::post('/list/json', 'App\Http\Controllers\BookController@listjson')->name('bookslistjson');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'App\Http\Controllers\UserController@index')->name('users');
        Route::post('/all', 'App\Http\Controllers\UserController@getAll')->name('users.getAll');
        Route::get('/changepassword/{id}', 'App\Http\Controllers\UserController@changepassword')->name('users.changepassword');
        Route::get('/change/{id}', 'App\Http\Controllers\UserController@change')->name('users.change');
    });

    Route::group(['prefix' => 'loan'], function () {
        Route::get('/', 'App\Http\Controllers\LoanController@index')->name('loans');
        Route::get('/create', 'App\Http\Controllers\LoanController@create')->name('loans.create');
        Route::post('/store', 'App\Http\Controllers\LoanController@store')->name('loans.store');
        Route::get('/change', 'App\Http\Controllers\LoanController@change')->name('loans.change');
        Route::post('/list/json', 'App\Http\Controllers\LoanController@listjson')->name('loanslistjson');
    });
});


