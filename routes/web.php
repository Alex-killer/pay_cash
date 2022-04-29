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

//Route::get('/', 'UserController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::patch('/{home}', 'HomeController@update')->name('home.update');

Route::get('/wallet', 'WalletController@index')->name('wallet.index');
Route::get('/wallet/create', 'WalletController@create')->name('wallet.create');
Route::post('/wallet', 'WalletController@store')->name('wallet.store');
Route::get('/wallet/{wallet}/edit', 'WalletController@edit')->name('wallet.edit');
Route::patch('/wallet/{wallet}', 'WalletController@update')->name('wallet.update');

Route::get('/transfer', 'TransferController@index')->name('transfer.index');
Route::get('/transfer/{wallet}/create', 'TransferController@create')->name('transfer.create');
Route::post('/transfer', 'TransferController@store')->name('transfer.store');
