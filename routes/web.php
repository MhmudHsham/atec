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
    Route::post('/sliders/apply_update/{id}', "admin\SlidersController@update");
    Route::resource('/sliders', 'admin\SlidersController');
    Route::post('/courses/apply_update/{id}', "admin\CoursesController@update");
    Route::resource('/courses', 'admin\CoursesController');
    Route::resource('/gallery', 'admin\GalleriesController');
    Route::resource('/instructors', 'admin\InstructorsController');
    Route::get('/materials/create/{course}', "admin\MaterialsController@create");    
    Route::get('/materials/{course}', "admin\MaterialsController@index");
    Route::get('/materials/show/{course}', "admin\MaterialsController@show");
    Route::post('/materials/apply_update/{id}', "admin\MaterialsController@update");
    Route::resource('/materials', 'admin\MaterialsController', ["except" => ["create", "index", "show"]]);
    Route::resource('/messages', 'admin\MessagesController');
    Route::post('/news/apply_update/{id}', "admin\NewsController@update");
    Route::resource('/news', 'admin\NewsController');
    Route::post('/services/apply_update/{id}', "admin\ServicesController@update");
    Route::resource('/services', 'admin\ServicesController');
    Route::resource('/years', 'admin\YearsController');
    Route::resource('/users', 'admin\UsersController');
    Route::post('/groups/apply_update/{id}', "admin\GroupsController@update");
    Route::resource('/groups', 'admin\GroupsController');
});