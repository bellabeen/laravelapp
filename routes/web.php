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

use App\Http\Controllers\SiswaController;

Route::get('/', 'PagesController@homepage');

Route::get('about', 'PagesController@about');

Route::group(['middleware' => ['web']], function(){
    Route::get('siswa', 'SiswaController@index');
    Route::get('siswa/create', 'SiswaController@create');
    Route::get('siswa/{siswa}', 'SiswaController@show');
    Route::post('siswa', 'SiswaController@store');
    Route::get('siswa/{siswa}/edit', 'SiswaController@edit');
    Route::patch('siswa/{siswa}', 'SiswaController@update');
    Route::delete('siswa/{siswa}', 'SiswaController@destroy');
});



Route::get('date-mutator', 'SiswaController@dateMutator');

Route::get('test-collection', 'SiswaController@tescollection');


Route::get('sampledata', function(){
    DB::table('siswa')->insert([
        [
            'nisn'          => '1001',
            'nama_siswa'    => "Muhammad Bella Buay Nunyai",
            'tanggal_lahir' => '1998-05-24',
            'jenis_kelamin' => 'L',
            'created_at'    => '2020-07-06 06:44:10',
            'updated_at'     => '2020-07-06 06:45:10'
        ],
        [
            'nisn'          => '1002',
            'nama_siswa'    => "Dimas Riyadi",
            'tanggal_lahir' => '1998-05-24',
            'jenis_kelamin' => 'L',
            'created_at'    => '2020-07-06 06:44:10',
            'updated_at'     => '2020-07-06 06:45:10'
        ],
    ]);
});


