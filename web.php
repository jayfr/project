<?php



Route::get('/', function () {
    return view('welcome');
   
});


Route::get('/about', 'HelloController@about'); 
Route::get('/services', 'HelloController@services'); 





