<?php

Route::get('/', 'HomeController@frontend')->name('v3.home');
Route::get('/{any}', 'HomeController@frontend')->where('any', '.*');