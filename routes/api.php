<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/card/create', 'CardController@store');
Route::get('/card/edit/{id}', 'CardController@edit');
Route::post('/card/update/{id}', 'CardController@update');
Route::delete('/card/delete/{id}', 'CardController@delete');
Route::get('/cards', 'CardController@index');