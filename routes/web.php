<?php

Route::get('/', 'App\Http\Controllers\ImageController@create');
Route::post('/', 'App\Http\Controllers\ImageController@store');
Route::get('/{image}', 'App\Http\Controllers\ImageController@show');
