<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SoftsControllers;
use App\http\Controllers\FruitsControllers;
use App\Http\Controllers\AlcoolsControllers;
use App\Http\Controllers\SiropsControllers;
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
})->name('home');

Route::get(
    '/softs',
    [SoftsControllers::class, 'index']
)->name('softs.index');

Route::post(
    '/softs',
    [SoftsControllers::class, 'store']
)->name('softs.store');

Route::get(
    '/fruits',
    [FruitsControllers::class, 'index']
)->name('fruits.index');

Route::post(
    '/fruits',
    [FruitsControllers::class, 'store']
)->name('fruits.store');

Route::get('/alcools', [AlcoolsControllers::class, 'index'])->name('alcools.index');
Route::post('/alcools', [AlcoolsControllers::class, 'store'])->name('alcools.store');
Route::get('/delete/{id}', [AlcoolsControllers::class, 'delete'])->name('alcools.delete');
Route::get('/softs/{id}', [SoftsControllers::class, 'delete'])->name('softs.delete');
Route::get(
    '/softs/{id}/edit', 
    [SoftsControllers::class, 'edit']
)->name('softs.edit');

Route::put(
    '/softs/{id}/update',
    [SoftsControllers::class, 'update']
)->name('softs.update');
Route::get(
    '/alcools/{id}/edit',
    [AlcoolsControllers::class, 'edit']
)->name('alcools.edit');
Route::put(
    '/alcools/{id}/update',
    [AlcoolsControllers::class, 'update']
)->name('alcools.update');
Route::get('/sirops', [SiropsControllers::class, 'index'])->name('sirops.index');
Route::post('/sirops', [SiropsControllers::class, 'store'])->name('sirops.store');
Route::get('/delete/{id}', [SiropsControllers::class, 'delete'])->name('sirops.delete');
Route::get('/sirops/{id}/edit', [SiropsControllers::class, 'edit'])->name('sirops.edit');
Route::put(
    '/sirops/{id}/update',
    [SiropsControllers::class, 'update']
)->name('sirops.update');
