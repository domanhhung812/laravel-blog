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

 	Route::group(['prefix' => 'menu'], function(){
 		Route::get('/', 'AdminMenuController@index')->name('admin.get.menu.index');
 		Route::get('/add','AdminMenuController@add')->name('admin.get.menu.add');
 		Route::post('/add','AdminMenuController@store');
 		Route::get('/edit/{id}','AdminMenuController@edit')->name('admin.get.menu.edit');
 		Route::post('/edit/{id}','AdminMenuController@update');
 		Route::get('/delete/{id}','AdminMenuController@delete')->name('admin.get.menu.delete');
 	});

});