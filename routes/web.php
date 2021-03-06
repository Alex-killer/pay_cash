<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::get('/', 'UserController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::patch('/{home}', 'HomeController@update')->name('home.update');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/wallet', 'WalletController@index')->name('wallet.index');
    Route::get('/wallet/create', 'WalletController@create')->name('wallet.create');
    Route::post('/wallet', 'WalletController@store')->name('wallet.store');
    Route::get('/wallet/{wallet}/edit', 'WalletController@edit')->name('wallet.edit');
    Route::patch('/wallet/{wallet}', 'WalletController@update')->name('wallet.update');

    Route::get('/transfer', 'TransferController@index')->name('transfer.index');
    Route::get('/transfer/{user}/create', 'TransferController@create')->name('transfer.create');
    Route::post('/transfer', 'TransferController@store')->name('transfer.store');
});
