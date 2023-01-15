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

Route::get('/', function () {
    return view('guest.main', ['comics' => config('comics')]);
})->name('main');

Route::get('/comic_info', function () {
    return view('guest.comic_info', [
        'comics' => config('comics')
    ]);
})->name('comic_info');
