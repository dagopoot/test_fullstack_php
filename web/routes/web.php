<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertySearchController;

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

Route::get('/', [PropertySearchController::class, 'home'])->name('home');
Route::get('/property/{property:id}/detail', [PropertySearchController::class, 'detail'])->name('property.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
