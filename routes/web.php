<?php


$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::post('balance/deposit', 'BalanceController@depositStore')->name('deposit.store');
    Route::get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');

    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('admin', 'AdminController@index')->name('admin.home');

});

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

