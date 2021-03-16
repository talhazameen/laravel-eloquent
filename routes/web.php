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
	$user = App\User::first();

	$post = $user->posts()->Create([
		'title' => 'this is my first post',
		'body' => 'this is body of first post',
	]);		

	$post->tags()->attach(2);



    return view('welcome');
});
