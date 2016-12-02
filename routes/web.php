<?php

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

/*Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');
Route::get('articles/{id}/edit','ArticlesController@edit');*/

Route::resource('articles','ArticlesController');



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('foo', ['middleware'=>'manager',function(){

    return 'This page only be viewed via manager';

}]);