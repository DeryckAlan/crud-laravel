<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//route for get a table of products
Route::get('/', [ProductController::class, 'index']);
Route::get('products', [ProductController::class, 'prodform']);
Route::post('insert-product', [ProductController::class, 'insert']);
Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);
Route::get('delete-product/{id}', [ProductController::class, 'destroy']);
