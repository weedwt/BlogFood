<?php

use App\User;

Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');

Route::resource('backpanel/user', 'User\UserController');

Route::resource('/backpanel/role', 'User\RoleController');




// Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');

// Route::get('/backpanel/users/create', 'User\UserController@create')->name('user.create');

// Route::post('/backpanel/users/create', 'User\UserController@store')->name('user.store');

// Route::get('/backpanel/users/{user}/edit', 'User\UserController@edit')->name('user.edit');

// Route::put('/backpanel/users/{user}/edit', 'User\UserController@update')->name('user.update');

// Route::delete('/backpanel/users/{user}/delete', 'User\UserController@destroy')->name('user.destroy');

