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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('index');
});*/


/*Route::get('/', function () {
    return view('menu');
});*/

/*Route:: view('/','index')->name('index');*/

Route:: view('/','menu')->name('menu');
Route:: view('/Compras', 'Compras')->name('Compras');
Route:: view('/Conocenos', 'Conocenos')->name('Conocenos');
Route:: view('/Contactanos', 'Contactanos')->name('Contactanos');
Route:: view('/Marcas', 'Marcas')->name('Marcas');
Route:: view('/Noticias', 'Noticias')->name('Noticias');
Route:: view('/Opiniones', 'Opiniones')->name('Opiniones');
Route:: post('Contactanos', ('mensajeController@sstore'))->name('Contac');
