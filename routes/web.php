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
    return view('school.index');
});

// menu link
Route::get('/school/about', 'schoolcontroller@about')->name('school.about');
Route::get('/school/teacherlist', 'schoolcontroller@teacherlist')->name('school.teacherlist');
Route::get('/school/students', 'schoolcontroller@students')->name('school.students');
Route::get('/school/contact', 'schoolcontroller@contact')->name('school.contact');
Route::get('/school/studentlist', 'schoolcontroller@studentlist')->name('school.studentlist');

// student form store
Route::post('/school/store', 'schoolcontroller@store')->name('school.store');

Route::get('/school/{id}/edit','schoolcontroller@edit')->name('school.edit');
Route::post('/school/{id}/update','schoolcontroller@update')->name('school.update');
Route::get('/school/{id}/delete','schoolcontroller@delete')->name('school.delete');
Route::get('/school/{id}/view','schoolcontroller@view')->name('school.view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
