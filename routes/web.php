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

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'ArticleController@index');
    Route::get('/articles/create', 'ArticleController@create');
    Route::get('/articles/{article}', 'ArticleController@show');
    Route::post('/articles/like/{article}', 'ArticleLikeController@like');
    Route::post('/articles/unlike/{article}', 'ArticleLikeController@unlike');    
    Route::post('/articles', 'ArticleController@store');
    Route::get('/articles/{article}/edit', 'ArticleController@edit');
    Route::put('/articles/{article}', 'ArticleController@update');
    Route::delete('/articles/{article}', 'ArticleController@delete');
    Route::post('/articles/comments', 'ArticleReviewController@store');
    
    Route::get('/cosmes/{cosme}', 'CosmeController@show');
    Route::get('/salons/{salon}', 'SalonController@show');    
   });