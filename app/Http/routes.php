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

Route::get('/awards', 'AwardController@index');
Route::get('/awards/{id}', 'AwardController@show');
Route::post('/awards/{id}', 'AwardController@create');

Route::get('/photos', 'PhotoController@index');
Route::get('/photos/{id}', 'PhotoController@show');
Route::post('/photos/{id}', 'PhotoController@create');

Route::get('/games', 'GamesController@index');
Route::get('/games/{id}', 'GamesController@show');
Route::post('/games/{id}', 'GamesController@create');

Route::get('/about', 'AboutController@index');
Route::get('/useful', 'UsefulController@index');

// --- Admin routes ---

Route::get('/admin/cabinet', 'Admin\AdminController@index')->middleware('auth');

// --- Work

Route::post('/admin/work/edit/{id}', 'Admin\AdminWorkController@edit')->middleware('auth');;
Route::get('/admin/work/edit/{id}', 'Admin\AdminWorkController@edit')->middleware('auth');;
Route::get('/admin/work/destroy/{id}', 'Admin\AdminWorkController@destroy')->middleware('auth');;
Route::post('/admin/work/add', 'Admin\AdminWorkController@create')->middleware('auth');;
Route::get('/admin/work/add', 'Admin\AdminWorkController@create')->middleware('auth');;
Route::get('/admin/work', 'Admin\AdminWorkController@index')->middleware('auth');;

// --- Awards

Route::post('/admin/awards/edit/{id}', 'Admin\AdminAwardsController@edit')->middleware('auth');;
Route::get('/admin/awards/edit/{id}', 'Admin\AdminAwardsController@edit')->middleware('auth');;
Route::get('/admin/awards/destroy/{id}', 'Admin\AdminAwardsController@destroy')->middleware('auth');;
Route::post('/admin/awards/add', 'Admin\AdminAwardsController@create')->middleware('auth');;
Route::get('/admin/awards/add', 'Admin\AdminAwardsController@create')->middleware('auth');;
Route::get('/admin/awards', 'Admin\AdminAwardsController@index')->middleware('auth');;

// --- Comments

Route::get('/admin/comments/destroy/{id}', 'Admin\AdminCommentsController@destroy')->middleware('auth');;
Route::get('/admin/comments', 'Admin\AdminCommentsController@index')->middleware('auth');;
Route::post('/comment/response', 'WorkController@response')->middleware('auth');

// --- Education activity

Route::post('/admin/education/edit/{id}', 'Admin\AdminEducationController@edit')->middleware('auth');;
Route::get('/admin/education/edit/{id}', 'Admin\AdminEducationController@edit')->middleware('auth');;
Route::get('/admin/education/destroy/{id}', 'Admin\AdminEducationController@destroy')->middleware('auth');;
Route::post('/admin/education/add', 'Admin\AdminEducationController@create')->middleware('auth');;
Route::get('/admin/education/add', 'Admin\AdminEducationController@create')->middleware('auth');;
Route::get('/admin/education', 'Admin\AdminEducationController@index')->middleware('auth');;

Route::post('/admin/information/edit/{id}', 'Admin\AdminInformationController@edit')->middleware('auth');;
Route::get('/admin/information/edit/{id}', 'Admin\AdminInformationController@edit')->middleware('auth');;
Route::get('/admin/information/destroy/{id}', 'Admin\AdminInformationController@destroy')->middleware('auth');;
Route::post('/admin/information/add', 'Admin\AdminInformationController@create')->middleware('auth');;
Route::get('/admin/information/add', 'Admin\AdminInformationController@create')->middleware('auth');;
Route::get('/admin/information', 'Admin\AdminInformationController@index')->middleware('auth');;

Route::post('/admin/photos/edit/{id}', 'Admin\AdminPhotosController@edit')->middleware('auth');;
Route::get('/admin/photos/edit/{id}', 'Admin\AdminPhotosController@edit')->middleware('auth');;
Route::get('/admin/photos/destroy/{id}', 'Admin\AdminPhotosController@destroy')->middleware('auth');;
Route::post('/admin/photos/add', 'Admin\AdminPhotosController@create')->middleware('auth');;
Route::get('/admin/photos/add', 'Admin\AdminPhotosController@create')->middleware('auth');;
Route::get('/admin/photos', 'Admin\AdminPhotosController@index')->middleware('auth');;

Route::post('/admin/games/edit/{id}', 'Admin\AdminGamesController@edit')->middleware('auth');;
Route::get('/admin/games/edit/{id}', 'Admin\AdminGamesController@edit')->middleware('auth');;
Route::get('/admin/games/destroy/{id}', 'Admin\AdminGamesController@destroy')->middleware('auth');;
Route::post('/admin/games/add', 'Admin\AdminGamesController@create')->middleware('auth');;
Route::get('/admin/games/add', 'Admin\AdminGamesController@create')->middleware('auth');;
Route::get('/admin/games', 'Admin\AdminGamesController@index')->middleware('auth');;




//Route::get('/register', function (){
//   return redirect()->route('home');
//});


Route::auth();

Route::get('/home', 'HomeController@index');