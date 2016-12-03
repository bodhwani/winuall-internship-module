<?php





Route::get('/', 'HomeController@home');

Route::get('about', 'HomeController@about');

Route::get('/login', 'LoginController@login');

Route::get('/questions/', 'QAController@index');

Route::get('/questions/{question}', 'QAController@show');

Route::post('/questions/', 'QAController@addQ');

Route::post('/questions/{question}/answers', 'AnswerController@showans');
