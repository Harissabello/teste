<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home']);

Route::get('/apropos', [PagesController::class, 'propos']);

Route::get('/services', [PagesController::class, 'service']);

Route::get('/show/{id}', [PagesController::class, 'show']);

Route::get('/create', [ProductController::class, 'create']);

Route:: post('/saveProduct', [ProductController::class, 'saveProduct']);
