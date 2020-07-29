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

Route::get('/', function () {
    return view('welcome');
});
//-----------------------------------------PRODUCTOS ROUTES---------------------------------------------------------
Route::get("/empresas","EmpresaController@index")->name("empresas");//Permite mostrar las empresas asociadas
Route::get("/empresa/nueva","EmpresaController@nuevaEmpresaForm")->name("nuevaEmpresaForm");
//--------------------------------------------CATEGORIAS ROUTES------------------------------------------------------
Route::get("/categorias","CategoriasController@index")->name("categorias");//Muestra las categorias de productos y/o empresas
Route::post("/categoria/nueva","CategoriasController@storeCategoria")->name("nuevaCategoria");
Route::get("/categoria/buscar","CategoriasController@buscarCategorias")->name("buscarCategorias");
Route::delete("/categoria/borrar","CategoriasController@borrarCategoria")->name("borrarCategoria");
Route::put("/categoria/editar","CategoriasController@editarCategoria")->name("editarCategoria");

Route::get("/categoria/tipos/buscar","CategoriasController@buscarTipoCategorias")->name("buscarTipoCategorias");
Route::get("/categorias/tipos","CategoriasController@verTipoCategorias")->name("verTipoCategorias");
Route::put("/categoria/tipos/editar","CategoriasController@editarTipoCategoria")->name("editarTipoCategoria");
Route::delete("/categoria/tipos/borrar","CategoriasController@borrarTipoCategoria")->name("borrarTipoCategoria");
Route::post("/tipo_categoria/nueva","CategoriasController@nuevoTipoCategoria")->name("nuevoTipoCategoria");// Crea una nueva categoria
 //--------------------------------------------Servivios ROUTES------------------------------------------------------
Route::resource("/servicios", "ServiciosController");
Route::put("/editarServivio", "ServiciosController@editarServicio")->name("editarServicio");
Route::delete("/destroyServicio","ServiciosController@destroyServicio")->name("destroyServicio");
Route::post("/nuevaCategoria", "ServiciosController@nuevaCategoria")->name("nuevaCategoria");



//--------------------------------------------Productos ROUTES------------------------------------------------------
Route::post("/productos/nuevo","ProductosController@storeProductos")->name("nuevoProducto");
Route::get("/productos", "ProductosController@index")->name("productos");//Muestra el servicio de las empresas
Route::put("/productos/editar","ProductosController@editarProductos")->name("editarProducto");
Route::delete("/productos/borrar","ProductosController@borrarProducto")->name("borrarProducto");

