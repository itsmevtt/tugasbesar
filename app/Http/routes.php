<?php

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

Route::auth();
Route::get('/@dmin-maqun', 'admin\AdminController@index');
Route::get('/home', 'HomeController@index');
Route::get('/maqun-qaf', 'FirstPageBladeController@index');
Route::get('/about', 'AboutBladeController@index');
Route::get('/about-team', 'AboutBladeController@team');
Route::get('/artikel', 'ArtikelController@index');
Route::get('/home-artikel', 'ArtikelController@home');
Route::get('/show/artikel/{id_artikel}', 'ArtikelController@show');

// NewFeed
Route::get('article/index', ['as' => 'article', 'uses' => 'admin\ArticleController@index']);
Route::get('article/create', ['as' => 'create', 'uses' => 'admin\ArticleController@create']);
Route::post('article/create', ['as' => 'store', 'uses' => 'admin\ArticleController@store']);
Route::get('article/edit/{id_article}', ['as' => 'edit', 'uses' => 'admin\ArticleController@edit']);
Route::put('article/edit/{id_article}', ['as' => 'edit', 'uses' => 'admin\ArticleController@update']);
Route::get('article/show/{id_article}', ['as' => 'show', 'uses' => 'admin\ArticleController@show']);
Route::delete('article/destroy/{id_article}', ['as' => 'destroy', 'uses' => 'admin\ArticleController@destroy']);
Route::get('/searcharticle', ['as' => 'searcharticle', 'uses' => 'admin\ArticleController@search']);
