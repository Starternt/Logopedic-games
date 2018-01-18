<?php


Route::get('/', function () {
    return view('index');
});

// --- Categories routes BELOW ---

Route::get('/education', 'EducationController@index');
Route::get('/information', 'InformationController@index');
Route::get('/my-work', 'WorkController@index');
Route::get('/my-work/{id}', 'WorkController@show');




Route::auth();

Route::get('/home', 'HomeController@index');
