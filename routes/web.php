<?php

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

Route::match(['get','post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']],function(){
	Route::get('/admin/progress', 'AdminController@progress');
	Route::get('/admin/dashboard', 'AdminController@dashboard');
	Route::get('/admin/settings', 'AdminController@settings');
	Route::get('/admin/check-pwd', 'AdminController@chkPassword');
	Route::match(['get','post'], '/admin/update-pwd', 'AdminController@updatePassword');
	Route::get('/admin/echantillons/index_echan', 'AdminController@index_echan');	
	/*Route::get('admin/users', 'AdminController@user');*/

	//Echantillons Routes (Admin)

	Route::match(['get','post'],'/admin/add-echantillon', 'EchantillonController@addEchanillon');
	Route::match(['get','post'], '/admin/modifier-echantillon/{id}', 'EchantillonController@modifierEchantillons');
	Route::get('/admin/voir-echantillon', 'EchantillonController@voirEchantillons');
	});

Route::get('/logout', 'AdminController@logout');

Route::resource('equipement', 'EquipementController');