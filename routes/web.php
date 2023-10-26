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


Route::get('/numerik','App\Http\Controllers\belajarCollectionController@controller');

Route::get('/identitasMahasiswa','App\Http\Controllers\belajarCollectionController@identitasMahasiswa');

Route::get('/restoran','App\Http\Controllers\belajarCollectionController@restoran');

Route::get('/uangJajan','App\Http\Controllers\belajarCollectionController@uangJajan');

Route::get('/matkul','App\Http\Controllers\belajarCollectionController@matkul');

Route::get('/collection','App\Http\Controllers\belajarCollectionController@collectionExample');

Route::get('/containcombine','App\Http\Controllers\belajarCollectionController@CombineContains');

Route::get('/crossJoin','App\Http\Controllers\belajarCollectionController@crossJoin');