<?php

<<<<<<< HEAD




Route::get('/', 'HomeController@home');

Route::get('about', 'HomeController@about');

Route::get('/login', 'LoginController@login');

Route::get('/questions/', 'QAController@index');

Route::get('/questions/{question}', 'QAController@show');

Route::post('/questions/', 'QAController@addQ');

Route::post('/questions/{question}/answers', 'AnswerController@showans');
=======
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
    return view('welcome');
});
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
