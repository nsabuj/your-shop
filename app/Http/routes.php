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
Route::get('/about', function () {
    return view('about');
});

Route::get('/add_article', [
    'uses' => 'ArticleController@add_article',
    'as' => 'article.add',
    'middleware' => 'auth'
    ]);

Route::post('/add_article', 
 ['as' => 'create_article', 'uses' => 'ArticleController@create']);


Route::auth();

Route::get('/home', 'HomeController@index');
