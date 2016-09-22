<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route AUTH
//Route::auth();
// Authentication Routes...
$this->get('admin/login', 'Auth\AuthController@showLoginForm');
$this->post('admin/login', 'Auth\AuthController@login');
$this->get('admin/logout', 'Auth\AuthController@logout');

// Registration Routes...
$this->get('admin/register', 'Auth\AuthController@showRegistrationForm');
$this->post('admin/register', 'Auth\AuthController@register');

//// Password Reset Routes...
//$this->get('admin/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//$this->post('admin/password/email', 'Auth\PasswordController@sendResetLinkEmail');
//$this->post('admin/password/reset', 'Auth\PasswordController@reset');
//

//USER
Route::get('/home', 'HomeController@index');

Route::get('/posting/{id}', 'HomeController@posting');

Route::get('/material', 'HomeController@material');

Route::get('/nat_mun/{id}', 'HomeController@natmun');

Route::get('/int_mun/{id}', 'HomeController@intmun');


Route::get('/', function () {
	return view('home/index');
});

Route::get('/about', function () {
	return view('home/about');
});

Route::get('/contact', function () {
	return view('home/contact');
});


Route::get('/faq',function(){
	return view('home/faq');
});

Route::get('/event_calendar',function(){
	return view('home/event_calendar');
});

Route::get('/gallery',function(){
	return view('home/gallery');
});

Route::get('/post',function(){
	return view('home/post');
});

//ADMIN

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
	Route::resource('article/member', 'ArticleMemberController');
	Route::resource('article/media', 'ArticleMediaCoverageController');
	Route::resource('material', 'MaterialsController');
	Route::resource('mun/national', 'NatMunController');
	Route::resource('mun/international', 'IntMunController');

	Route::get('/view_material',function(){
		return view('admin/view_material');
	});

	Route::get('/form_material',function(){
		return view('admin/form_material');
	});

	Route::get('/form_member',function(){
		return view('admin/form_member');
	});

	Route::get('/form_edit_material',function(){
		return view('admin/edit_material');
	});
});


