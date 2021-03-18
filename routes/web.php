<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\homeProdcutsControllers;
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

Route::get('/', [homeProdcutsControllers::class. 'show']);




Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::post('submit',[products::class, 'save']);
Route::post('submit',[products::class, 'save']);
