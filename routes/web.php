<?php


$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('admin', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

