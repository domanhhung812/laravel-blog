<?php
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
 	Route::get('/','AdminDashboardController@index')->name('admin.get.dashboard');

 	Route::group(['prefix' => 'tag'], function(){
 		Route::get('/', 'AdminTagController@index')->name('admin.get.tag.list');
 		Route::get('/add','AdminTagController@add')->name('admin.get.tag.add');
 		Route::post('/add','AdminTagController@store');
 		Route::get('/edit/{id}','AdminTagController@edit')->name('admin.get.tag.edit');
 		Route::post('/edit/{id}','AdminTagController@update');
 		Route::get('/delete/{id}','AdminTagController@delete')->name('admin.get.tag.delete');
 	});
});