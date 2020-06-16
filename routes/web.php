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

/*Route::get('/hello', function () {
    //return view('welcome');
	return 'Hello World';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' .$name. ' with an id of ' .$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/profile', 'PagesController@profile');

Route::resource('posts', 'PostsController');

Route::group(['middleware' => 'App\Http\Middleware\OrganiserMiddleware'], function(){
	Route::match(['get', 'post'], '/organiserOnlyPage/', 'DashboardController@organiser');
});
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function(){
	Route::match(['get', 'post'], '/studentOnlyPage/', 'DashboardController@student');
});
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
	Route::match(['get', 'post'], '/adminOnlyPage/', 'DashboardController@admin');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('organiserprofile', 'OrganiserProfileController@index');
Route::post('organiserprofile', 'OrganiserProfileController@update')->name('organiserprofile.update');
