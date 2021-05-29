<?php

use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)-> name('index');

Route::get('/about','PageController@about') ->name('about');

Route::get('/services','PageController@services') ->name('services');

Route::get('/contact','PageController@contact') -> name('contact');
Route::get('/author/{key}', PostByAuthorController::class) -> name('post_by_author');

Route::get('/post/{id}', SinglePostController::class) -> name('single_post');
Route::post('/post/{id}', SaveCommentController::class) -> name('save_comment');


Route::get('/category/{key}', PostsByCategoryController::class) -> name('post_by_category');

//Admin
Route::get('/admin/add_post', 'AdminPostsController@add') -> name('add_post_get');
Route::post('/admin/add_post', 'AdminPostsController@save') -> name('add_post_post');


//Auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
