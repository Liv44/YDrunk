<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SoftsControllers;
use App\Http\Controllers\FruitsControllers;
use App\Http\Controllers\AlcoolsTypeControllers;
use App\Http\Controllers\AlcoolsControllers;
use App\Http\Controllers\SiropsControllers;
use App\Http\Controllers\GlassesControllers;
use App\Http\Controllers\CocktailsControllers;
use App\Http\Controllers\IngredientsControllers;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */


// Softs
Route::get(
    '/softs',
    [SoftsControllers::class, 'index']
)->middleware(['auth:admin'])->name('softs.index');

Route::post(
    '/softs',
    [SoftsControllers::class, 'store']
)->middleware(['auth:admin'])->name('softs.store');

Route::get(
    '/fruits',
    [FruitsControllers::class, 'index']
)->middleware(['auth:admin'])->name('fruits.index');

Route::post(
    '/fruits',
    [FruitsControllers::class, 'store']
)->middleware(['auth:admin'])->name('fruit.store');

Route::get('fruits/{id}/edit', [FruitsControllers::class, 'edit'])->middleware(['auth:admin'])->name('fruits.edit');
Route::get('/fruits/{id}', [FruitsControllers::class, 'delete'])->middleware(['auth:admin'])->name('fruits.delete');
Route::put(
    '/fruits/{id}/update',
    [FruitsControllers::class, 'update']
)->middleware(['auth:admin'])->name('fruits.update');

Route::get('/alcools/type', [AlcoolsTypeControllers::class, 'index'])->middleware(['auth:admin'])->name('alcoolstype.index');
Route::post('/alcools/type', [AlcoolsTypeControllers::class, 'store'])->middleware(['auth:admin'])->name('alcoolstype.store');
Route::get('/alcools/type/{id}', [AlcoolsTypeControllers::class, 'delete'])->middleware(['auth:admin'])->name('alcoolstype.delete');
Route::get('/softs/{id}', [SoftsControllers::class, 'delete'])->middleware(['auth:admin'])->name('softs.delete');

Route::get(
    '/softs/{id}/edit', 
    [SoftsControllers::class, 'edit']
)->middleware(['auth:admin'])->name('softs.edit');

Route::put(
    '/softs/{id}/update',
    [SoftsControllers::class, 'update']
)->middleware(['auth:admin'])->name('softs.update');
Route::get(
    '/alcools/type/{id}/edit',
    [AlcoolsTypeControllers::class, 'edit']
)->middleware(['auth:admin'])->name('alcoolstype.edit');
Route::put(
    '/alcools/type/{id}/update',
    [AlcoolsTypeControllers::class, 'update']
)->middleware(['auth:admin'])->name('alcoolstype.update');
Route::get('/sirops', [SiropsControllers::class, 'index'])->middleware(['auth:admin'])->name('sirops.index');
Route::post('/sirops', [SiropsControllers::class, 'store'])->middleware(['auth:admin'])->name('sirops.store');
Route::get('/sirops/{id}', [SiropsControllers::class, 'delete'])->middleware(['auth:admin'])->name('sirops.delete');
Route::get('/sirops/{id}/edit', [SiropsControllers::class, 'edit'])->middleware(['auth:admin'])->name('sirops.edit');
Route::put(
    '/sirops/{id}/update',
    [SiropsControllers::class, 'update']
)->middleware(['auth:admin'])->name('sirops.update');
Route::get('/alcools', [AlcoolsControllers::class, 'index'])->middleware(['auth:admin'])->name('alcools.index');
Route::post('/alcools', [AlcoolsControllers::class, 'store'])->middleware(['auth:admin'])->name('alcools.store');
Route::get('/alcools/{id}', [AlcoolsControllers::class, 'delete'])->middleware(['auth:admin'])->name('alcools.delete');
Route::get('/alcools/{id}/edit', [AlcoolsControllers::class, 'edit'])->middleware(['auth:admin'])->name('alcools.edit');
Route::put(
    '/alcools/{id}/update',
    [AlcoolsControllers::class, 'update']
)->middleware(['auth:admin'])->name('alcools.update');


///Glasses

Route::get(
    '/glasses',
    [GlassesControllers::class, 'index']
)->middleware(['auth:admin'])->name('glasses.index');

Route::post(
    '/glasses',
    [GlassesControllers::class, 'store']
)->middleware(['auth:admin'])->name('glasses.store');

Route::get(
    '/glasses/{id}/edit', 
    [GlassesControllers::class, 'edit']
)->middleware(['auth:admin'])->name('glasses.edit');

Route::put(
    '/glasses/{id}/update',
    [GlassesControllers::class, 'update']
)->middleware(['auth:admin'])->name('glasses.update');

Route::get('/glasses/{id}', [GlassesControllers::class, 'delete'])->middleware(['auth:admin'])->name('glasses.delete');


//Cocktails

Route::get(
    '/cocktails',
    [CocktailsControllers::class, 'index']
)->middleware(['auth:admin'])->name('cocktails.index');

Route::get(
    '/cocktails/create',
    [CocktailsControllers::class, 'create']
)->middleware(['auth:admin'])->name('cocktails.create');

Route::post(
    '/cocktails',
    [CocktailsControllers::class, 'store']
)->middleware(['auth:admin'])->name('cocktails.store');

Route::get(
    '/cocktails/{id}/edit', 
    [CocktailsControllers::class, 'edit']
)->middleware(['auth:admin'])->name('cocktails.edit');

Route::put(
    '/cocktails/{id}/update',
    [CocktailsControllers::class, 'update']
)->middleware(['auth:admin'])->name('cocktails.update');

Route::get('/cocktails/{id}', [CocktailsControllers::class, 'delete'])->middleware(['auth:admin'])->name('cocktails.delete');


// Ingredients

Route::get(
    '/cocktails/{id}/ingredients',
    [IngredientsControllers::class, 'index']
)->middleware(['auth:admin'])->name('ingredients.index');

Route::post(
    '/cocktails/{id}/ingredients/add',
    [IngredientsControllers::class, 'add']
)->middleware(['auth:admin'])->name('ingredients.add');

Route::get(
    '/ingredients/{id}',
    [IngredientsControllers::class, 'delete']
)->middleware(['auth:admin'])->name('ingredients.delete');
