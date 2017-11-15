<?php

use App\Task;

//posts
Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@show');

Route::get('/post', 'PostController@viewPost');

Route::post('/post', 'PostController@createPost');

//tasks
Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');


//about
Route::get('/about', function(){
	return view('about');
});

//send mail
Route::get('/mail', 'MailblastController@index');

Route::post('/sendMail', 'MailblastController@sendMail');

Route::get('/sent', 'MailblastController@sent');