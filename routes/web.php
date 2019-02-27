<?php
Route::get('admin/login.html', 'Admin\LoginController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\LoginController@postLogin')->name('postLoginAdmin');
Route::group(['prefix'=>'admin'], function(){
	Route::get('', 'Admin\AdminController@getIndex')->name('getIndexAdmin');
});
