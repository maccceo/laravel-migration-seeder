<?php

Route::get('/', 'placeController@index') -> name('plc.index');
Route::get('/create', 'placeController@create') -> name('plc.create');
Route::post('/create', 'placeController@store') -> name('plc.store');
