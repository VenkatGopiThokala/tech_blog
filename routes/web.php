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



Route::get('dashboard', function () {
    return 'welcome to dashboard!';
});

Route::any('/', function()
{
    return 'Hello World';
});



Route::view('/', 'test');
Route::get('/', 'App\Http\Controllers\ArticlesController@index' );
Route::view('/contact', 'contact');
Route::get('/article', function () {
    return "Article number is ";
});
Route::get('/article/{id}', function ($id) {
    return "Article number is ". $id;
});
