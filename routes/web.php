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

Route::get('/pages/homepage', function () {
    return view('/pages/homepage');
});

Route::get('/pages/about', function(){
    return view('pages/about');
});

Route::get('/siswa', function(){
    $siswa = ['Arba Nugraha', 'Riki Amudra', 'Mahsa Vania Salsabila'];
    return view('siswa/index', compact('siswa'));
});
