<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\homeProdcutsControllers;
use App\Http\Controllers\blogController;

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

Route::get('/', [homeProdcutsControllers::class, 'main']);
Route::get('/blog', [blogController::class, 'main']);
Route::get('/addblog', [blogController::class, 'add']);
Route::get('/addproduct',[products::class, 'show']);
Route::POST('/submit',[products::class, 'save']);
Route::POST('/addblogtodb',[blogController::class, 'save']);
Route::get('/{name}', [homeProdcutsControllers::class, 'show', '$name']);






