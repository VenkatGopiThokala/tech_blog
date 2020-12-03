<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::get('/test', function () {
   return view('main');
});
Route::get('/', 'App\Http\Controllers\ArticlesController@index' );
Route::get('/admin', 'App\Http\Controllers\AdminController@index' );
Route::get('/admin/addCategory', 'App\Http\Controllers\AdminController@addCategory' );
Route::get('/admin/addTag', 'App\Http\Controllers\AdminController@addTag' );
Route::get('/admin/viewTag', 'App\Http\Controllers\AdminController@viewTag' );
Route::get('/admin/viewCategory', 'App\Http\Controllers\AdminController@viewCategory' );
Route::get('/admin/addArticle', 'App\Http\Controllers\AdminController@addArticle' );
Route::get('/admin/viewArticle', 'App\Http\Controllers\AdminController@viewArticle' );



Route::view('/contact', 'contact');



Route::get('/article', function () {
    return "Article number is ";
});
Route::get('/article/{id}', function ($id) {
    return "Article number is ". $id;
});
