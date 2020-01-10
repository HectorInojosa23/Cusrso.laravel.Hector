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
    return view('inicio');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('Permiso/{nombre}/{slug?}', 'PermisoController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function()  {

Route::get('Permiso', 'PermisoController@index')->name('permiso');
Route::get('Permiso/crear', 'PermisoController@create')->name('crear_permiso');

});
