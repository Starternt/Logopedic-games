<?php


Route::get('/', function () {
    return view('index');
});

// --- Categories routes BELOW ---

Route::get('/education', 'EducationController@index');
Route::post('/education', 'EducationController@create');

Route::get('/information', 'InformationController@index');
Route::post('/information', 'InformationController@create')
;
Route::get('/work', 'WorkController@index');
Route::get('/work/{id}', 'WorkController@show');
Route::post('/work/{id}', 'WorkController@create');

Route::get('/photos', 'PhotoController@index');
Route::get('/photos/{id}', 'PhotoController@show');

Route::get('/games', 'GamesController@index');
Route::get('/games/{id}', 'GamesController@show');

Route::get('/about', 'AboutController@index');

// --- Admin routes ---

Route::get('/admin/cabinet', 'Admin\AdminController@index');


Route::post('/admin/work/edit/{id}', 'Admin\AdminWorkController@edit');
Route::get('/admin/work/edit/{id}', 'Admin\AdminWorkController@edit');
Route::get('/admin/work/destroy/{id}', 'Admin\AdminWorkController@destroy');
Route::post('/admin/work/add', 'Admin\AdminWorkController@create');
Route::get('/admin/work/add', 'Admin\AdminWorkController@create');
Route::get('/admin/work', 'Admin\AdminWorkController@index');

Route::post('/admin/education/edit/{id}', 'Admin\AdminEducationController@edit');
Route::get('/admin/education/edit/{id}', 'Admin\AdminEducationController@edit');
Route::get('/admin/education/destroy/{id}', 'Admin\AdminEducationController@destroy');
Route::post('/admin/education/add', 'Admin\AdminEducationController@create');
Route::get('/admin/education/add', 'Admin\AdminEducationController@create');
Route::get('/admin/education', 'Admin\AdminEducationController@index');

Route::post('/admin/information/edit/{id}', 'Admin\AdminInformationController@edit');
Route::get('/admin/information/edit/{id}', 'Admin\AdminInformationController@edit');
Route::get('/admin/information/destroy/{id}', 'Admin\AdminInformationController@destroy');
Route::post('/admin/information/add', 'Admin\AdminInformationController@create');
Route::get('/admin/information/add', 'Admin\AdminInformationController@create');
Route::get('/admin/information', 'Admin\AdminInformationController@index');

Route::post('/admin/photos/edit/{id}', 'Admin\AdminPhotosController@edit');
Route::get('/admin/photos/edit/{id}', 'Admin\AdminPhotosController@edit');
Route::get('/admin/photos/destroy/{id}', 'Admin\AdminPhotosController@destroy');
Route::post('/admin/photos/add', 'Admin\AdminPhotosController@create');
Route::get('/admin/photos/add', 'Admin\AdminPhotosController@create');
Route::get('/admin/photos', 'Admin\AdminPhotosController@index');

Route::post('/admin/games/edit/{id}', 'Admin\AdminGamesController@edit');
Route::get('/admin/games/edit/{id}', 'Admin\AdminGamesController@edit');
Route::get('/admin/games/destroy/{id}', 'Admin\AdminGamesController@destroy');
Route::post('/admin/games/add', 'Admin\AdminGamesController@create');
Route::get('/admin/games/add', 'Admin\AdminGamesController@create');
Route::get('/admin/games', 'Admin\AdminGamesController@index');





Route::auth();

Route::get('/home', 'HomeController@index');
