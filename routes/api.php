<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->group(function () {
	Route::get('/user', function (Request $request) {
		return $request->user();
	});
	Route::apiResource('/roles', 'RoleController');
	Route::apiResource('/users', 'UserController')->middleware('can:manage-user, App\User');
	Route::get('/permissions', 'PermissionController@index');
	Route::get('/setting', 'SettingController@show');
	Route::put('/setting', 'SettingController@update')->middleware('can:config-site, App\User');
	Route::get('/cities', 'CityController@index');
	Route::get('/districts/city/{id}', 'DistrictController@getByCity');
	Route::get('/categories/to-tree', 'CategoryController@getToTree');
	Route::get('/categories/to-select', 'CategoryController@getToSelect');
	Route::get('/blogs/home', 'BlogController@blogHome');
	Route::get('/blogs/search/{value}', 'BlogController@blogSearch');
	Route::get('/blogs/detail/{id}', 'BlogController@showBySlug');
	Route::get('/blogs/list/{cid}', 'BlogController@getByCategory');
	Route::get('/blogs/menuhot', 'BlogController@getBlogHot');
	Route::get('/categories/menu-top', 'CategoryController@menuTop');
	Route::apiResource('/categories', 'CategoryController');
	Route::post('/blogs/upload', 'BlogController@uploadImage');
	Route::apiResource('/blogs', 'BlogController');
	Route::apiResource('/tags', 'TagController');

});
