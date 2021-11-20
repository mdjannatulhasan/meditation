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
Route::get('course', 'Frontend\CourseController@index');
Route::get('course-details/{id}', 'Frontend\CourseDetailsController@index');
Route::get('about', 'Frontend\AboutController@index');
Route::get('body-yoga', 'Frontend\YogaController@index');
Route::get('contact', 'Frontend\ContactController@index');
Route::get('detox/{id}', 'Frontend\DetoxController@index');
Route::get('events', 'Frontend\EventController@index');
Route::get('event-details/{id}', 'Frontend\EventDetailsController@index');
Route::get('focus/{id}', 'Frontend\FocuseController@index');
Route::get('gallery', 'Frontend\GallaryController@index');
Route::get('living', 'Frontend\LivingController@index');
Route::get('sessions', 'Frontend\SessionController@index');
Route::get('session-details/{id}', 'Frontend\SessionDetailController@index');
Route::get('shop', 'Frontend\ShopController@index');
Route::get('sleep', 'Frontend\SleepController@index');
Route::get('satori/{title}/{id}', 'Frontend\StressController@index');
Route::get('tryouts', 'Frontend\TryoutsController@index');
Route::get('meditation', 'Frontend\MeditationController@index');


// signin and signup
Route::get('signin', 'Frontend\SigninController@index');
Route::get('signup', 'Frontend\SignupController@index');
