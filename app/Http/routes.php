<?php


Route::get('/', function () {
    return view('index');
});

// --- Categories routes BELOW ---

Route::get('/education', 'EducationController@index');
Route::post('/education', 'EducationController@create');
Route::get('/information', 'InformationController@index');
Route::get('/work', 'WorkController@index');
Route::get('/work/{id}', 'WorkController@show');


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





Route::auth();

Route::get('/home', 'HomeController@index');
