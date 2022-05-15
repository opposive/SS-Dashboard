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
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('Pages.Dashboard');
})->name('dashboard');

Route::get('/settings',function(){
    return view('Pages.Settings');
})->name('settings');

Route::get('/report',function(){
    return view('Pages.Report');
})->name('report');

Route::get('/channel',function(){
    return view('Pages.SettingsChannel');
})->name('channel');
