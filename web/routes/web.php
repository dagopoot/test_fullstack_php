<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertySearchController;
use App\Http\Controllers\PropertyController;
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

Route::get('/', [PropertySearchController::class, 'list'])->name('property.list');
Route::get('/property/{property:id}/detail', [PropertySearchController::class, 'detail'])->name('property.detail');

Route::middleware(['auth:sanctum', 'verified'])->get('/property/create', [PropertyController::class, 'create'])->name('property.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/property', [PropertyController::class, 'store'])->name('property.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/property/{property:id}/edit', [PropertyController::class, 'edit'])->name('property.edit');
Route::middleware(['auth:sanctum', 'verified'])->put('/property/{property}', [PropertyController::class, 'update'])->name('property.update');
Route::middleware(['auth:sanctum', 'verified'])->delete('/property/{property}', [PropertyController::class, 'destroy'])->name('property.destroy');

Auth::routes();
