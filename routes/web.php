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

Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/employees/create', 'EmployeeController@create')->name('employee.create');
Route::post('/store', 'EmployeeController@store')->name('employee.store');
Route::get('/employees/{id}/show','EmployeeController@show')->name('employee.show');
Route::get('employees/{id}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('employees/{employee}', 'EmployeeController@update')->name('employee.update');
Route::get('employees/{id}/delete', 'EmployeeController@delete')->name('employee.delete');
Route::delete('employees/{employee}', 'EmployeeController@destroy')->name('employee.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
