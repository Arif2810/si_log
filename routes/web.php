<?php

// Route::get('/', function(){
//   return view('welcome');
// });

Auth::routes();
Route::any('register', function(){
	return abort(404);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
//=========================================================================
Route::group(['middleware'=>'auth'], function(){
	Route::resource('employee', 'EmployeeController');
	Route::get('/employee/{id_karyawan}/show', 'EmployeeController@show');
	//=========================================================================
	Route::resource('data', 'DataController');
	Route::get('/data/{id_data}/show', 'DataController@show');
	// Route::get('/data', 'DataController@index')->name('schedule.index');
	// Route::get('/data/create', 'DataController@create')->name('schedule.create');
	// Route::post('/data', 'DataController@store');
	// Route::get('/data/{id_jadwal}/edit', 'DataController@edit');
	// Route::put('/data/{id_jadwal}', 'DataController@update');
	// Route::delete('/data/{id_jadwal}', 'DataController@destroy');
	//=========================================================================
	Route::resource('galery', 'GaleryController');
	Route::get('/galery/{id_galeri}/show', 'GaleryController@show');
	//=========================================================================
	Route::get('/setting', 'UserSettingController@form')->name('user.setting');
	Route::post('/setting', 'UserSettingController@update');
	//=========================================================================
	Route::group(['middleware'=>'akses.admin'], function(){
		Route::resource('user', 'UserController');
		Route::resource('agama', 'AgamaController');
		Route::resource('gender', 'GenderController');
		Route::resource('machine', 'MachineController');
	});
	// Route::get('/user', 'UserController@index')->name('user.index')->middleware('akses.admin');
	//=========================================================================

	Route::get('/about', function(){
		return view('admin.about');
	});
});
