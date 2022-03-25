<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SoftsControllers;
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
    '/softs/{id}/edit', 
    [SoftsControllers::class, 'edit']
)->name('softs.edit');

Route::put(
    '/softs/{id}/update',
    [SoftsControllers::class, 'update']
)->name('softs.update');