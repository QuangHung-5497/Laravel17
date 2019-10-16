<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group([
	'namespace'=> 'fontend',
	'prefix'=> 'home'
], function(){
	Route::get('/', function(){
		return view('fontend.home');
	})->name('fontend.home');
	Route::get('/cart', function(){
		return view('fontend.cart');
	})->name('fontend.cart');
	Route::get('/contact', function(){
		return view('fontend.contact');
	})->name('fontend.contact');
	Route::get('product', function(){
		return view('fontend.product');
	})->name('fontend.product');
	Route::get('shop', function(){
		return view('fontend.shop');
	})->name('fontend.shop');
});
// Route::group([
//     'namespace' => 'Backend',
//     'prefix' => 'admin'
// ], function (){
//     Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
// });
Route::group([
	'prefix'=> 'admin',
	'namespace'=> 'Backend'
], function(){
	Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
	Route::group(['prefix'=>'products'], function(){
		Route::get('/', 'ProductController@index')->name('backend.product.index');
		Route::get('/create', 'ProductController@create')->name('backend.product.create');
	});
	Route::group(['prefix'=>'users'], function(){
		Route::get('/', 'UserController@index')->name('backend.user.index');
		Route::get('/create', 'UserController@create')->name('backend.user.create');
		Route::get('/{user_id}', 'UserController@show')->name('backend.user.show');
	});
	Route::group(['prefix'=>'categories'], function(){
		Route::get('/', 'CategoryController@index')->name('backend.category.index');
		Route::get('/create', 'CategoryController@create')->name('backend.category.create');
	});
});
