<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Http\Request;

Route::get('/admin', "ProductsController@index")->name("adminindex");

Route::get('/admin/create', "ProductsController@create")->name("admincreate");

Route::post('/admin/store', "ProductsController@store")->name("adminstore");

Route::get("/admin/show/{id}","ProductsController@show")->name("adminshow");

Route::post('/admin/delete', "ProductsController@destroy")->name("admindelete");

Route::get("/show",function(){
	return view("products.index");
})->name("ushow");

