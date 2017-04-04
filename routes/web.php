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

Route::get('/', 'EntryController@index');

Route::resource('entry', 'EntryController');

Route::get('entry/{entry}/address/create', 'AddressController@create')->name('entry.address.create');
Route::post('entry/{entry}/address/store', 'AddressController@store')->name('entry.address.store');

Route::get('address/{address}/edit', 'AddressController@edit')->name('address.edit');
Route::put('address/{address}/update', 'AddressController@update')->name('address.update');

Route::delete('address/{address}/destroy', 'AddressController@destroy')->name('address.destroy');
