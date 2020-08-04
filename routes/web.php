<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\SuccessfullyApplyforEvent;
use App\User;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

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

//student profile
Route::get('/profile', 'UserController@index')->name('profile.index');
Route::post('/profile', 'UserController@store')->name('profile.store');
Route::patch('/profile', 'UserController@update')->name('profile.update');


//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//organiser profile
Route::get('organiserprofile', 'OrganiserProfileController@index');
Route::post('organiserprofile', 'OrganiserProfileController@update')->name('organiserprofile.update');

//event category
Route::get('education', 'PagesController@display_education')->name('education');
Route::get('festival', 'PagesController@display_fest')->name('festival');
Route::get('animals', 'PagesController@display_animals')->name('animals');
Route::get('culture', 'PagesController@display_culture')->name('culture');
Route::get('community', 'PagesController@display_community')->name('community');
Route::get('festival', 'PagesController@display_fest')->name('festival');
Route::get('health', 'PagesController@display_health')->name('health');

//Route::post('pages/profile', );


Route::get('/Studentdashboard', 'DashboardController@index')->name('dashboard');


//apply
Route::get('apply/{id}', 'ApplyEventController@store')->name('apply');
Route::get('/Studentdashboard', 'ApplyEventController@index')->name('studentdashboard.index');
Route::get('Studentdashboard/{id}', 'ApplyEventController@show')->name('details.show');
Route::delete('Studentdashboard', 'ApplyEventController@destroy')->name('application.destroy');

//Route::get('/Studentdashboard', 'ApplyEventController@Email')->name('studentdashboard.email');

Route::resource('faq', 'FaqController');

Route::resource('organiserprofile', 'OrganiserProfilesController');

Route::resource('manageapply', 'ManageApplyController');

Route::resource('Notifications', 'NotificationController');



Route::get('/{id}', 'EmailNotificationController@show')->name('remind.show')->middleware('auth');

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::group([ 'middleware' => 'auth' ], function () {
    // ...
    Route::get('/notifications', 'NotificationController@notifications');
});



