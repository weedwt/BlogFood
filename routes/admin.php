<?php


Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');

Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');

Route::get('/backpanel/users/create', 'User\UserController@create')->name('user.create');
