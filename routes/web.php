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

Route::group(['middleware' => ['login']], function () {
    // Route::resource('employees', 'EmployeesController');
    // Route::get('employees', 'EmployeesController@index')->name('index');
    Route::get('/employees', 'EmployeesController@index')->name('index');
    Route::post('/employees', 'EmployeesController@store')->name('store')->middleware('can:create,App\Employee');
    Route::put('/employees/{employee}', 'EmployeesController@update')->name('update');
    Route::delete('/employees/{employee}', 'EmployeesController@destroy')->name('destroy');

    Route::get('/logout', 'UserController@logout');
});

Route::match(['get', 'post'], '/login', 'UserController@login')->name('login');

Route::match(['get', 'post'], '/register', 'UserController@register')->name('register');