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

Route::prefix('afipcore')->group(function() {
    Route::get('/', 'AfipCoreController@index');
    
    Route::put('detalle-presupuestos/habilitar/{id}', 'DetallePresupuestoController@habilitar');
    Route::put('detalle-presupuestos/deshabilitar/{id}', 'DetallePresupuestoController@deshabilitar');
    Route::post('detalle-presupuestos/actualizar-imagen/{imagen}/{id}', 'DetallePresupuestoController@actualizarImagen');
    Route::put('detalle-presupuestos/aprobar-imagen/{imagen}/{id}', 'DetallePresupuestoController@aprobarImagen');
    Route::resource('detalle-presupuestos','DetallePresupuestoController');
    
    Route::put('presupuestos/habilitar/{id}', 'PresupuestoController@habilitar');
    Route::put('presupuestos/deshabilitar/{id}', 'PresupuestoController@deshabilitar');
    Route::post('presupuestos/actualizar-imagen/{imagen}/{id}', 'PresupuestoController@actualizarImagen');
    Route::put('presupuestos/aprobar-imagen/{imagen}/{id}', 'PresupuestoController@aprobarImagen');
    Route::resource('presupuestos','PresupuestoController');
    
    Route::put('detalle-ventas/habilitar/{id}', 'DetalleVentaController@habilitar');
    Route::put('detalle-ventas/deshabilitar/{id}', 'DetalleVentaController@deshabilitar');
    Route::post('detalle-ventas/actualizar-imagen/{imagen}/{id}', 'DetalleVentaController@actualizarImagen');
    Route::put('detalle-ventas/aprobar-imagen/{imagen}/{id}', 'DetalleVentaController@aprobarImagen');
    Route::resource('detalle-ventas','DetalleVentaController');
    
    Route::put('ventas/habilitar/{id}', 'VentaController@habilitar');
    Route::put('ventas/deshabilitar/{id}', 'VentaController@deshabilitar');
    Route::post('ventas/actualizar-imagen/{imagen}/{id}', 'VentaController@actualizarImagen');
    Route::put('ventas/aprobar-imagen/{imagen}/{id}', 'VentaController@aprobarImagen');
    Route::resource('ventas','VentaController');
    
    Route::put('clientes/habilitar/{id}', 'ClienteController@habilitar');
    Route::put('clientes/deshabilitar/{id}', 'ClienteController@deshabilitar');
    Route::post('clientes/actualizar-imagen/{imagen}/{id}', 'ClienteController@actualizarImagen');
    Route::put('clientes/aprobar-imagen/{imagen}/{id}', 'ClienteController@aprobarImagen');
    Route::resource('clientes','ClienteController');
    
    Route::put('producto-ubicaciones/habilitar/{id}', 'ProductoUbicacionController@habilitar');
    Route::put('producto-ubicaciones/deshabilitar/{id}', 'ProductoUbicacionController@deshabilitar');
    Route::post('producto-ubicaciones/actualizar-imagen/{imagen}/{id}', 'ProductoUbicacionController@actualizarImagen');
    Route::put('producto-ubicaciones/aprobar-imagen/{imagen}/{id}', 'ProductoUbicacionController@aprobarImagen');
    Route::resource('producto-ubicaciones','ProductoUbicacionController');
    
    Route::put('ubicaciones/habilitar/{id}', 'UbicacionController@habilitar');
    Route::put('ubicaciones/deshabilitar/{id}', 'UbicacionController@deshabilitar');
    Route::post('ubicaciones/actualizar-imagen/{imagen}/{id}', 'UbicacionController@actualizarImagen');
    Route::put('ubicaciones/aprobar-imagen/{imagen}/{id}', 'UbicacionController@aprobarImagen');
    Route::resource('ubicaciones','UbicacionController');
    
    Route::put('productos/habilitar/{id}', 'ProductoController@habilitar');
    Route::put('productos/deshabilitar/{id}', 'ProductoController@deshabilitar');
    Route::post('productos/actualizar-imagen/{imagen}/{id}', 'ProductoController@actualizarImagen');
    Route::put('productos/aprobar-imagen/{imagen}/{id}', 'ProductoController@aprobarImagen');
    Route::resource('productos','ProductoController');
    
    Route::put('unidad-medidas/habilitar/{id}', 'UnidadMedidasController@habilitar');
    Route::put('unidad-medidas/deshabilitar/{id}', 'UnidadMedidasController@deshabilitar');
    Route::post('unidad-medidas/actualizar-imagen/{imagen}/{id}', 'UnidadMedidasController@actualizarImagen');
    Route::put('unidad-medidas/aprobar-imagen/{imagen}/{id}', 'UnidadMedidasController@aprobarImagen');
    Route::resource('unidad-medidas','UnidadMedidasController');
    
    Route::put('tipo-ubicaciones/habilitar/{id}', 'TipoUbicacionController@habilitar');
    Route::put('tipo-ubicaciones/deshabilitar/{id}', 'TipoUbicacionController@deshabilitar');
    Route::post('tipo-ubicaciones/actualizar-imagen/{imagen}/{id}', 'TipoUbicacionController@actualizarImagen');
    Route::put('tipo-ubicaciones/aprobar-imagen/{imagen}/{id}', 'TipoUbicacionController@aprobarImagen');
    Route::resource('tipo-ubicaciones','TipoUbicacionController');
    
    Route::put('tipo-productos/habilitar/{id}', 'TipoProductoController@habilitar');
    Route::put('tipo-productos/deshabilitar/{id}', 'TipoProductoController@deshabilitar');
    Route::post('tipo-productos/actualizar-imagen/{imagen}/{id}', 'TipoProductoController@actualizarImagen');
    Route::put('tipo-productos/aprobar-imagen/{imagen}/{id}', 'TipoProductoController@aprobarImagen');
    Route::resource('tipo-productos','TipoProductoController');
    
    Route::put('tipo-ivas/habilitar/{id}', 'TipoIvaController@habilitar');
    Route::put('tipo-ivas/deshabilitar/{id}', 'TipoIvaController@deshabilitar');
    Route::post('tipo-ivas/actualizar-imagen/{imagen}/{id}', 'TipoIvaController@actualizarImagen');
    Route::put('tipo-ivas/aprobar-imagen/{imagen}/{id}', 'TipoIvaController@aprobarImagen');
    Route::resource('tipo-ivas','TipoIvaController');
    
    Route::put('tipo-comprobantes/habilitar/{id}', 'TipoComprobanteController@habilitar');
    Route::put('tipo-comprobantes/deshabilitar/{id}', 'TipoComprobanteController@deshabilitar');
    Route::post('tipo-comprobantes/actualizar-imagen/{imagen}/{id}', 'TipoComprobanteController@actualizarImagen');
    Route::put('tipo-comprobantes/aprobar-imagen/{imagen}/{id}', 'TipoComprobanteController@aprobarImagen');
    Route::resource('tipo-comprobantes','TipoComprobanteController');
    
    Route::put('categoria-ivas/habilitar/{id}', 'CategoriaIvaController@habilitar');
    Route::put('categoria-ivas/deshabilitar/{id}', 'CategoriaIvaController@deshabilitar');
    Route::post('categoria-ivas/actualizar-imagen/{imagen}/{id}', 'CategoriaIvaController@actualizarImagen');
    Route::put('categoria-ivas/aprobar-imagen/{imagen}/{id}', 'CategoriaIvaController@aprobarImagen');
    Route::resource('categoria-ivas','CategoriaIvaController');
    
    Route::put('localidades/habilitar/{id}', 'LocalidadController@habilitar');
    Route::put('localidades/deshabilitar/{id}', 'LocalidadController@deshabilitar');
    Route::post('localidades/actualizar-imagen/{imagen}/{id}', 'LocalidadController@actualizarImagen');
    Route::put('localidades/aprobar-imagen/{imagen}/{id}', 'LocalidadController@aprobarImagen');
    Route::resource('localidades','LocalidadController');
    
    Route::put('provincias/habilitar/{id}', 'ProvinciaController@habilitar');
    Route::put('provincias/deshabilitar/{id}', 'ProvinciaController@deshabilitar');
    Route::post('provincias/actualizar-imagen/{imagen}/{id}', 'ProvinciaController@actualizarImagen');
    Route::put('provincias/aprobar-imagen/{imagen}/{id}', 'ProvinciaController@aprobarImagen');
    Route::resource('provincias','ProvinciaController');
    
    Route::put('paises/habilitar/{id}', 'PaisController@habilitar');
    Route::put('paises/deshabilitar/{id}', 'PaisController@deshabilitar');
    Route::post('paises/actualizar-imagen/{imagen}/{id}', 'PaisController@actualizarImagen');
    Route::put('paises/aprobar-imagen/{imagen}/{id}', 'PaisController@aprobarImagen');
    Route::resource('paises','PaisController');
});
