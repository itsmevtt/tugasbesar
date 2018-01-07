<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home
Route::get('/', function () {
    return view('welcome');
});

// FirstPage
Route::group(["prefix"=>"first_page"], function () {
	Route::get("/", "FirstPageBladeController@index");
	Route::get("/detail", "FirstPageBladeController@detail");
	Route::get("/conditional", "FirstPageBladeController@conditional");
	Route::get("/looping", "FirstPageBladeController@looping");
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


// NewFeed
Route::get('article/index', ['as' => 'article', 'uses' => 'admin\ArticleController@index']);
Route::get('article/create', ['as' => 'create', 'uses' => 'admin\ArticleController@create']);
Route::post('article/create', ['as' => 'store', 'uses' => 'admin\ArticleController@store']);
Route::get('article/edit/{id_article}', ['as' => 'edit', 'uses' => 'admin\ArticleController@edit']);
Route::put('article/edit/{id_article}', ['as' => 'edit', 'uses' => 'admin\ArticleController@update']);
Route::get('article/show/{id_article}', ['as' => 'show', 'uses' => 'admin\ArticleController@show']);
Route::delete('article/destroy/{id_article}', ['as' => 'destroy', 'uses' => 'admin\ArticleController@destroy']);
Route::get('/searcharticle', ['as' => 'searcharticle', 'uses' => 'admin\ArticleController@search']);
