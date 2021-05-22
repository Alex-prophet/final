<?php

use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)-> name('index');

Route::get('/about','PageController@about') ->name('about');

Route::get('/services','PageController@services') ->name('services');

Route::get('/contact','PageController@contact') -> name('contact');
Route::get('/author/{key}', PostByAuthorController::class) -> name('post_by_author');

Route::get('/post/{id}', SinglePostController::class) -> name('single_post');

