<?php
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
 	Route::get('/','AdminDashboardController@index')->name('admin.get.dashboard');
});