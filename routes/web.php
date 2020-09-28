<?php

use Illuminate\Support\Facades\Route;

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



Route::view('admin' , 'admin')->name('adminPanel');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


// ABM MARCA //

Route::get('marcas' , 'MarcaController@index')->name('marca.index');
Route::post('admin/marcas' , 'MarcaController@store')->name('marca.store');
Route::get('admin/marcas/crear' ,[
'middleware' => 'admin' ,
'uses' =>'MarcaController@create',
])->name('marca.crear');

//BANNERS //

Route::get('admin/banners' ,[
	'middleware' => 'admin' ,
	'uses' => 'PromoController@index'
])->name('promos.index');

Route::patch('admin/banners/{banner}' , 'PromoController@update')->name('promos.update');

//HERO BANNER//

Route::get('admin/herobanner' ,[
	'middleware' => 'admin' ,
	'uses' => 'HeroController@index'
])->name('hero.index');

Route::post('admin/herobanner' , 'HeroController@store')->name('hero.store');

// ABM ESTILO //

Route::get('admin/estilos' ,[
	'middleware' => 'admin' ,
	'uses' => 'EstilosController@index'
])->name('estilos.index');

Route::post('admin/estilos' , 'EstilosController@store')->name('estilos.store');

Route::get('admin/estilo/crear' ,[
	'middleware' => 'admin' ,
	'uses' => 'EstilosController@create'
])->name('estilos.crear');

Route::get('admin/estilos/{estilo}/editar' ,[
		'middleware' => 'admin',
		'uses' => 'EstilosController@edit'
	] )->name('estilos.edit');

Route::patch('admin/estilos/{estilo}' , 'EstilosController@update')->name('estilos.update');

// ABM TIPO DE PRODUCTOS //
Route::get('admin/tipoproducto' , 'TipoProductosController@index')->name('tipoProducto.index');

Route::post('admin/tipoproducto' , 'TipoProductosController@store')->name('tipoproducto.store');

Route::get('admin/tipoproducto/crear' , [
    'middleware' => 'admin',
    'uses' => 'TipoProductosController@create'
])->name('tipoproducto.crear');



// MUESTRA LOS PRODUCTOS TRAIDOS DE LA DB
Route::get('productos' , 'ProductoController@index')->name('productos.index');

// PA EDITAR EL PRODUCTO
Route::get('admin/productos/{producto}/editar' ,[
		'middleware' => 'admin',
		'uses' => 'ProductoController@edit'
	] )->name('productos.edit');

// HACE EL UPDATE DEL EDIT
Route::patch('admin/producto/{producto}' , 'ProductoController@update')->name('productos.update');

// REDIRECCIONA AL FORMULARIO DE CREACION
Route::get('admin/productos/crear' ,[
	'middleware' => 'admin',
	'uses' => 'ProductoController@create'
])->name('productos.crear');

// OBTIENE UN PRODUCTO DE FORMA INDIVIDUAL
Route::get('productos/{id}' , 'ProductoController@show')->name('producto.show');



// CREA Y ALMACENA EL PRODUCTO EN LA DB
Route::post('admin/productos' , 'ProductoController@store')->name('productos.store');




Auth::routes();

Route::get('/' , 'HomeController@index')->name('raiz');
Route::get('/index', 'HomeController@index')->name('index');
