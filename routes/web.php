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
Route::view('/contact', 'contact');
