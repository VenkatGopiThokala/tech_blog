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


Route::get('/test', 'App\Http\Controllers\mainController@index');
Route::get('/article/{id}', 'App\Http\Controllers\mainController@showArticle')->name('showArticle');
Route::get('/article', function () {
    return view('article');
});
Route::view('/contact', 'contact');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');

Route::get('/admin/addCategory', 'App\Http\Controllers\AdminController@addCategory')->name('addCategory');
Route::post('/admin/addCategory', 'App\Http\Controllers\AdminController@addCategoryData')->name('addCategoryData');
Route::get('/admin/editCategory/{id}', 'App\Http\Controllers\AdminController@editCategory')->name('editCategory');
Route::post('/admin/updateCategory/{id}', 'App\Http\Controllers\AdminController@updateCategory')->name('updateCategory');
Route::delete('/admin/deleteCategory/{id}', 'App\Http\Controllers\AdminController@deleteCategory')->name('deleteCategory');
Route::get('/admin/viewCategory', 'App\Http\Controllers\AdminController@viewCategory')->name('viewCategory');

Route::get('/admin/addTag', 'App\Http\Controllers\AdminController@addTag')->name('addTag');
Route::post('/admin/addTag', 'App\Http\Controllers\AdminController@addTagData')->name('addTagData');
Route::get('/admin/editTag/{id}', 'App\Http\Controllers\AdminController@editTag')->name('editTag');
Route::post('/admin/updateTag/{id}', 'App\Http\Controllers\AdminController@updateTag')->name('updateTag');
Route::delete('/admin/deleteTag/{id}', 'App\Http\Controllers\AdminController@deleteTag')->name('deleteTag');
Route::get('/admin/viewTag', 'App\Http\Controllers\AdminController@viewTag')->name('viewTag');

Route::get('/admin/addArticle', 'App\Http\Controllers\AdminController@addArticle')->name('addArticle');
Route::post('/admin/addArticle', 'App\Http\Controllers\AdminController@addArticleData')->name('addArticleData');
Route::get('/admin/editArticle/{id}', 'App\Http\Controllers\AdminController@editArticle')->name('editArticle');
Route::post('/admin/updateArticle/{id}', 'App\Http\Controllers\AdminController@updateArticle')->name('updateArticle');
Route::delete('/admin/deleteArticle/{id}', 'App\Http\Controllers\AdminController@deleteArticle')->name('deleteArticle');
Route::get('/admin/viewArticle', 'App\Http\Controllers\AdminController@viewArticle')->name('viewArticle');
