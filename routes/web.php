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
Route::view("sint", 'login');
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/header', function () {
//     return view('header');
// });
// Route::view('/contact','contact')->name ('contact');
// Route::view('Home','Home')->name ('Home');