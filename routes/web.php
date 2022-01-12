<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecetteController;
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

Route::get('/recipes',[RecetteController::class, "index"]);
Route::get('/recipes/create',[RecetteController::class, "create"]);
Route::post('/recipes/create',[RecetteController::class, "store"]);
Route::get('/recipes/edit/{id}',[RecetteController::class, "edit"]);
Route::post('/recipes/edit/{id}',[RecetteController::class, "update"]);
Route::delete('/recipes/edit/{id}/{ing}',[RecetteController::class, "delete"]);


Route::get('/ingredient',[IngredientController::class, "create"]);
Route::post('/ingredient',[IngredientController::class, "store"]);

Route::get('/category',[CategoryController::class, "create"]);
Route::post('/category',[CategoryController::class, "store"]);

