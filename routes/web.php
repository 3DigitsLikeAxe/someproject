<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Routing\AbstractRouteCollection;


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

Route::get('/', 'App\Http\Controllers\ProductsController@show');
Route::get('about', 'App\Http\Controllers\TeamsController@show');
Route::get('products', 'App\Http\Controllers\ProductsController@showList');
Route::get('contact', function () {return view('contact');});
Route::get('galary', 'App\Http\Controllers\ArticlesController@showGallery');

Route::get('/blog', 'App\Http\Controllers\ArticlesController@index');
Route::post('/blog', 'App\Http\Controllers\ArticlesController@store');
Route::get('/blog/create', 'App\Http\Controllers\ArticlesController@create');
Route::get('/blog/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::put('/blog/{article}', 'App\Http\Controllers\ArticlesController@update');
Route::get('/blog/{article}/delete', 'App\Http\Controllers\ArticlesController@delete');
Route::get('/blog/{article}', 'App\Http\Controllers\ArticlesController@show');



