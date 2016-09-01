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

Route::get('/', function () {
    return view('home/index');
});

Route::get('/about', function () {
    return view('home/about');
});

Route::get('/contact', function () {
    return view('home/contact');
});

Route::get('/int_mun', function () {
    return view('home/int_mun');
});

Route::get('/nat_mun',function(){
	return view('home/nat_mun');
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

Route::get('/material',function(){
	return view('home/material');
});

Route::get('/post',function(){
	return view('home/post');
});

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