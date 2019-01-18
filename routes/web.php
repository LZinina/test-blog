<?php



Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

 
    
   
