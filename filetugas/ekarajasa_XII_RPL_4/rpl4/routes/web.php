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

Route::get('/biodata', function () {
    $data1=[
        'nama'=>' eka rajasa',
        'lahir'=>' majalengka 01 06 03',
        'hobi'=>' Main Game',
        'jk'=>' laki-laki',
        'agama'=>' islam',
        'alamat'=>' abdinegara blok c',
        'telp'=>' 082121260400',
        'email'=>' eka.mikuzo98@gmail.com'
    ];
return view('biodata',$data1);

});
