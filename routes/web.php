<?php

Route::get('/', 'App\Http\Controllers\ImageController@create');
Route::post('/', 'App\Http\Controllers\ImageController@store');
Route::get('/{image}', 'App\Http\Controllers\ImageController@show');

Route::get('/', 'App\Http\Controllers\UploadController@index');
Route::post('/store', 'App\Http\Controllers\UploadController@store');
Route::get('download/{file}','App\Http\Controllers\UploadController@download');
Route::delete('remove/{file}','App\Http\Controllers\UploadController@destroy');
