<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/proveedor' , 'ProveedorController@index' )->name('proveedor.index');
Route::get('/proveedorcrear' , 'ProveedorController@registrar')->name('proveedor.registrar');
Route::post('/proveedorcrear','ProveedorController@create')->name('proveedor.crear');
Route::get('/proveedoractualizar/{id}' , 'ProveedorController@update')->name('proveedor.update');
Route::get('/proveedoreliminar/{id}','ProveedorController@delete')->name('proveedor.delete');

Route::get('usuario','UsuarioController@index')->name('usuario.index');
Route::get('/usuariocrear' , 'UsuarioController@registrar')->name('usuario.registrar');
Route::post('/usuariocrear','UsuarioController@create');
Route::get('/usuariorol/{id}', 'UsuarioController@rol');

Route::get('todo' , function (){
    return view('proveedores.lista');
});


// Pedido Compra
Route::get('/pedidocompra','PedidoCompraController@index')->name('pedidoCompras.index');
Route::get('/pedidocompra/create' , 'PedidoCompraController@registrar')->name('pedidoCompras.registrar');
Route::post('/pedidocompra','PedidoCompraController@create')->name('pedidoCompras.crear');
Route::get('/pedidocompraactualizar/{id}' , 'PedidoCompraController@update')->name('pedidoCompras.actualizar');
Route::get('/pedidocompraeliminar/{id}','PedidoCompraController@delete')->name('pedidoCompras.delete');

// Libro diario
Route::get('/librodiario', 'LibrodiarioController@index')->name('librodiario.index');
Route::get('/librodiariocrear', 'LibrodiarioController@registrar')->name('librodiario.registrar');
Route::post('/librodiariocrear', 'LibrodiarioController@create')->name('librodiario.crear');
Route::get('/librodiarioactualizar/{id}', 'LibrodiarioController@update')->name('librodiario.actualizar');
Route::get('/librodiarioeliminar/{id}', 'LibrodiarioController@delete')->name('librodiario.eliminar');

// Libro mayor
Route::get('/libromayor', 'LibromayorController@index')->name('libromayor.index');
Route::get('/libromayorcrear', 'LibromayorController@registrar')->name('libromayor.registrar');
Route::post('/libromayorcrear', 'LibromayorController@create')->name('libromayor.crear');
Route::get('/libromayoractualizar/{id}', 'LibromayorController@update')->name('libromayor.actualizar');
Route::get('/libromayoreliminar/{id}', 'LibromayorController@delete')->name('libromayor.eliminar');

// Asiento
Route::get('/asiento', 'AsientoController@index')->name('asiento.index');
Route::get('/asiento/crear', 'AsientoController@registrar')->name('asiento.registrar');
Route::post('/asiento', 'AsientoController@create')->name('asiento.crear');
Route::get('/asientoactualizar/{id}', 'AsientoController@update')->name('asiento.actualizar');
Route::get('/asientoeliminar/{id}', 'AsientoController@delete')->name('asiento.eliminar');

// Factura Compras
Route::get('/facturacompra', 'FacturaCompraController@index')->name('facturacompra.index');
Route::get('/facturacompra/crear', 'FacturaCompraController@registrar')->name('facturacompra.registrar');
Route::post('/facturacompra', 'FacturaCompraController@create')->name('facturacompra.crear');
// Route::get('/facturacompraactualizar/{id}', 'FacturaCompraController@update')->name('facturacompra.actualizar');
Route::get('/facturacompraeliminar/{id}', 'FacturaCompraController@delete')->name('facturacompra.eliminar');

// Pagos Compras
Route::get('/pagocompra', 'PagosCompraController@index')->name('pagocompra.index');
Route::get('/pagocompra/crear', 'PagosCompraController@registrar')->name('pagocompra.registrar');
Route::post('/pagocompra', 'PagosCompraController@create')->name('pagocompra.crear');
// Route::get('/pagocompraactualizar/{id}', 'PagosCompraController@update')->name('pagocompra.actualizar');
Route::get('/pagocompraeliminar/{id}', 'PagosCompraController@delete')->name('pagocompra.eliminar');

// Cliente
Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/crear', 'ClienteController@registrar')->name('cliente.registrar');
Route::post('/cliente', 'ClienteController@create')->name('cliente.crear');
Route::get('/clienteactualizar/{id}', 'ClienteController@update')->name('cliente.actualizar');
Route::get('/clienteeliminar/{id}', 'ClienteController@delete')->name('cliente.eliminar');

// Pedido Venta
Route::get('/pedidoventa', 'PedidoVentaController@index')->name('pedidoventa.index');
Route::get('/pedidoventa/crear', 'PedidoVentaController@registrar')->name('pedidoventa.registrar');
Route::post('/pedidoventa', 'PedidoVentaController@create')->name('pedidoventa.crear');
Route::get('/pedidoventaactualizar/{id}', 'PedidoVentaController@update')->name('pedidoventa.actualizar');
Route::get('/pedidoventaeliminar/{id}', 'PedidoVentaController@delete')->name('pedidoventa.eliminar');

// Factura Venta
Route::get('/facturaventa', 'FacturaVentaController@index')->name('facturaventa.index');
Route::get('/facturaventa/crear', 'FacturaVentaController@registrar')->name('facturaventa.registrar');
Route::post('/facturaventa', 'FacturaVentaController@create')->name('facturaventa.crear');
// Route::get('/facturaventaactualizar/{id}', 'FacturaVentaController@update')->name('facturaventa.actualizar');
Route::get('/facturaventaeliminar/{id}', 'FacturaVentaController@delete')->name('facturaventa.eliminar');

// Pagos Ventas
Route::get('/pagoventa', 'PagosVentaController@index')->name('pagoventa.index');
Route::get('/pagoventa/crear', 'PagosVentaController@registrar')->name('pagoventa.registrar');
Route::post('/pagoventa', 'PagosVentaController@create')->name('pagoventa.crear');
// Route::get('/pagoventaactualizar/{id}', 'PagosVentaController@update')->name('pagoventa.actualizar');
Route::get('/pagoventaeliminar/{id}', 'PagosVentaController@delete')->name('pagoventa.eliminar');
