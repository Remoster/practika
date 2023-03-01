<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControlle;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog',[ProductControlle::class, 'showCatalog'] );
Route::get('/catalog/{id}',[ProductControlle::class, 'singleProduct'] );
Route::get('/catalog/sort/{name}/{nap}',[ProductControlle::class, 'showCatalog'] );
Route::get('/catalog/filtr/{idCat}',[ProductControlle::class, 'fltrCatalog'] );

