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


// PageController Actions Routes
Route::get('/', 'PagesController@getIndex')->name('homepage');
Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('contact', 'PagesController@getContact')->name('contact');
Route::post('contact', 'PagesController@postContact')->name('contact.submit');




// Auth login Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// UserController profile para usuario autenticado, admin y teacher
Route::get('/profile', 'HomeController@profile');
Route::post('/profile', 'HomeController@update_avatar');




Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index');
	Route::get('/home', 'AdminController@index')->name('admin.home');

	Route::get('/defaulthome', 'AdminController@defaultHome')->name('admin.defaulthome');
	
	Route::get('/profiledefault', 'AdminController@profileDefault')->name('admin.profiledefault');
	Route::post('/profiledefault', 'AdminController@update_avatar_profiledefault');

	Route::get('/profile', 'AdminController@profile')->name('admin.profile');
	Route::post('/profile', 'AdminController@update_avatar');


	Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
	
	Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	
	Route::post('/password/reset', 'Admin\ResetPasswordController@reset');
	Route::post('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Admin\RegisterController@register');


    // Categories
    Route::resource('categories', 'CategoryController');


    /* Teacher Routes */
    Route::prefix('teacher')->group(function () {
    	Route::get('/', 'TeacherController@index');
    	Route::get('/home', 'TeacherController@index')->name('teacher.home');

    	Route::get('/profile', 'TeacherController@profile')->name('teacher.profile');
    	Route::post('/profile', 'TeacherController@update_avatar');
    });
});

