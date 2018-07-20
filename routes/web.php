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

Route::group(["middleware"=>["auth"], "prefix" => "admin"], function() {
    Route::get('/', "admin\DashboardController@index");
    Route::resource('/sliders', 'admin\SlidersController');
    Route::resource('/courses', 'admin\CoursesController');
    Route::resource('/gallery', 'admin\GalleriesController');
    Route::resource('/instructors', 'admin\InstructorsController');
    Route::resource('/materials', 'admin\MaterialsController');
    Route::resource('/messages', 'admin\MessagesController');
    Route::resource('/news', 'admin\NewsController');
    Route::resource('/servives', 'admin\ServicesController');
    Route::resource('/years', 'admin\YearsController');
});