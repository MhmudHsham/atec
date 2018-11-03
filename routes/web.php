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

Auth::routes();

Route::group(["middleware"=>["auth"], "prefix" => "admin"], function() {
    Route::get('/settings', 'admin\SettingsController@index');
    Route::post('/store_settings', 'admin\SettingsController@store');

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

    Route::get('/profile', 'admin\ProfileController@index');
    Route::get('/update_info', 'admin\ProfileController@update_info');
    Route::post('/change_password', 'admin\ProfileController@change_password');
    Route::post('/update_image', 'admin\ProfileController@update_image');
    Route::post('/update_data', 'admin\ProfileController@update_data');


    Route::get('students-list', 'admin\StudentsSheetController@index');
    Route::post('load-students', 'admin\StudentsSheetController@store');
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']
        ]
        , function() {
    Route::get(LaravelLocalization::transRoute('/'), "HomeController@index");
    Route::get(LaravelLocalization::transRoute('about-us'), 'HomeController@about_us');
    Route::get(LaravelLocalization::transRoute('contact-us'), 'ContactusController@index');
    Route::get(LaravelLocalization::transRoute('services'), 'ServicesController@index');
    Route::get(LaravelLocalization::transRoute('services/details/{service_id}'), 'ServicesController@details');
    Route::get(LaravelLocalization::transRoute('news'), 'NewsController@index');
    Route::get(LaravelLocalization::transRoute('news/details/{news_id}'), 'NewsController@details');
    Route::get(LaravelLocalization::transRoute('student/login'), 'UsersController@loginView');
    Route::get(LaravelLocalization::transRoute('courses'), 'CoursesController@index');
});

Route::get('subscribe'. 'HomeController@setSubscriber');
