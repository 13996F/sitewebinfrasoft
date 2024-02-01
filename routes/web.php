<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/','index')->name('pagina incio');
Route::view('/contact', 'contact')->name('pagina contacto');
Route::view('/service', 'service')->name('pagina servicios');
Route::view('/desarrolloweb', 'desarrolloweb')->name('pagina desarrollo web');
Route::view('/desarrollomovil', 'desarrollomovil')->name('pagina desarrollo movil');
Route::view('/pagered', 'pagered')->name('pagina redes y servidores');
Route::view('/quienesSomos', 'quienesSomos')->name('pagina quienes somos');
Route::view('/politicaSeguridad', 'politicaSeguridad')->name('Politica seguridad');
Route::view('/pageTecnologia', 'pageTecnologia')->name('pagina Tecnologias');
Route::view('/comoTrabajamos', 'comoTrabajamos')->name('pagina como trabajamos');
Route::view('/clientes', 'clientes')->name('pagina clientes');