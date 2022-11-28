<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index']);
Route::get('/publisher', [WebController::class, 'publisher']);
Route::get('/contact', [WebController::class, 'contact']);
Route::get('/comedy', [WebController::class, 'comedy']);
Route::get('/horror', [WebController::class, 'horror']);
Route::get('/manga', [WebController::class, 'manga']);
Route::get('/romance', [WebController::class, 'romance']);
Route::get('/detail{id}', [WebController::class, 'detail']);
Route::get('/categories{id}', [CategoryController::class, 'index']);




