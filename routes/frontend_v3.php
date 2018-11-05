<?php

// Route::get('/', 'HomeController@index')->name('v3.home');
// Route::get('/{slug}', 'HomeController@detail')->name('v1.detail');
// Route::get('/category/{slug}', 'HomeController@category')->name('v1.category');

Route::get('/','FronendController@index')->name('/');
Route::get('details/{id}/{slug}','FronendController@detail')->name('detail');
Route::get('sreachs','FronendController@sreach')->name('sreach');
Route::get('category/{id}/{slug}','FronendController@category')->name('categories');
