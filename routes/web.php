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
    return view('main');
});

// *************** Enrutamiento Rol ***************
Route::get('/rol','RolController@index');

Route::get('/rol/create','RolController@create');
Route::get('/rol/{id}/editar','RolController@edit');
Route::get('/rol/{id}/eliminar','RolController@destroy');
Route::post('/rol/post/create','RolController@store');
Route::post('/rol/post/edit/{id}','RolController@update');




// *************** Enrutamiento Business ***************
Route::get('/business','BusinessController@index');

Route::get('/business/create','BusinessController@create');
Route::get('/business/{id}/editar','BusinessController@edit');
Route::get('/business/{id}/eliminar','BusinessController@destroy');
Route::post('/business/post/create','BusinessController@store');
Route::post('/business/post/edit/{id}','BusinessController@update');



// *************** Enrutamiento Modulo ***************
Route::get('/modulo','ModuloController@index');

Route::get('/modulo/create','ModuloController@create');
Route::get('/modulo/{id}/editar','ModuloController@edit');
Route::get('/modulo/{id}/eliminar','ModuloController@destroy');
Route::post('/modulo/post/create','ModuloController@store');
Route::post('/modulo/post/edit/{id}','ModuloController@update');


// *************** Enrutamiento User ***************
Route::get('/user','UserCController@index');

Route::get('/user/create','UserCController@create');
Route::get('/user/{id}/editar','UserCController@edit');
Route::get('/user/{id}/eliminar','UserCController@destroy');
Route::post('/user/post/create','UserCController@store');
Route::post('/user/post/edit/{id}','UserCController@update');

// *************** Enrutamiento User - Detalle ***************
Route::get('/user/{id}/detalle','UserRolsController@show');

// *************** Enrutamiento User - Rols ***************

Route::get('/user/{id}/new-rol','UserRolsController@create');
Route::get('/user/{idU}/eliminar/rol/{idR}','UserRolsController@destroy');
Route::post('/user/new-rol','UserRolsController@store');

// *************** Enrutamiento User - Business ***************

Route::get('/user/{id}/new-business','UserBusinessesController@create');
Route::get('/user/{idU}/eliminar/business/{idB}','UserBusinessesController@destroy');
Route::post('/user/new-business','UserBusinessesController@store');

// *************** Enrutamiento Rol - Detalle ***************
Route::get('/rol/{id}/detalle','RolModulosController@show');

// *************** Enrutamiento Rol - Modulo ***************

Route::get('/rol/{id}/new-modulo','RolModulosController@create');
Route::get('/rol/{idR}/eliminar/modulo/{idM}','RolModulosController@destroy');
Route::post('/rol/new-modulo','RolModulosController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
