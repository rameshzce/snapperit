<?php

Route::get('/', 'Snapperit\Fishead\Controllers\AlbumsController@index');
Route::get('/jobs/album/{id}', 'Snapperit\Fishead\Controllers\JobsController@index');
