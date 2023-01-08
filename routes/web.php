<?php
//
//Route::get('/', 'App\Http\Controllers\ImageController@create');
//Route::post('/', 'App\Http\Controllers\ImageController@store');
//Route::get('/{image}', 'App\Http\Controllers\ImageController@show');

Route::get('/store', 'App\Http\Controllers\UploadController@index');
Route::get('/test', 'App\Http\Controllers\UploadController@test');
//Route::post('/store', 'App\Http\Controllers\UploadController@store');
Route::get('download/{file}','App\Http\Controllers\UploadController@download');
Route::delete('remove/{file}','App\Http\Controllers\UploadController@destroy');
