<?php

/*
|--------------------------------------------------------------------------
| Web Routes las rutas de la pág, vistas,
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
/* el metodo uno x uno:
Route::get('/colaboradores', 'CollaboratorsController@index' );

Route::get('/colaboradores', function () {
    return view('colaboradores.form');
});

Route::get('/colaboradores', 'CollaboratorsController@create');

Route::get('/colaboradores', function () {
    return view('colaboradores.edit');
});*/
/**el metodo para la ruta cool: carpeta con los blade de colaboradores y el nombre del
 controlador
*/

Route::resource('colaboradores', 'CollaboratorsController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

