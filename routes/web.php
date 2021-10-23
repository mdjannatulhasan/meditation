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

Route::get('/', 'Frontend\HomeController@index');
Route::get('course-details', 'Frontend\CourseController@index');
Route::get('about', 'Frontend\AboutController@index');
Route::get('body-yoga', 'Frontend\YogaController@index');
Route::get('contact', 'Frontend\ContactController@index');
Route::get('detox', 'Frontend\DetoxController@index');
Route::get('events', 'Frontend\EventController@index');
Route::get('event-details', 'Frontend\EventDetailsController@index');
Route::get('focus', 'Frontend\FocuseController@index');
Route::get('gallery', 'Frontend\GallaryController@index');
Route::get('living', 'Frontend\LivingController@index');
Route::get('sessions', 'Frontend\SessionController@index');
Route::get('sessions-details', 'Frontend\SessionDetailController@index');
Route::get('shop', 'Frontend\ShopController@index');
Route::get('sleep', 'Frontend\SleepController@index');
Route::get('stress', 'Frontend\StressController@index');


// signin and signup
Route::get('signin', 'Frontend\SigninController@index');
Route::get('signup', 'Frontend\SignupController@index');
