<?php

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

use App\Http\Controllers\MasterController;
Route::get('/', [MasterController::class, 'index']);
Route::get('/home', [MasterController::class, 'index']);
Route::get('/about', [MasterController::class, 'about']);
Route::post('/liste', [MasterController::class, 'liste']);
Route::get('/contact', [MasterController::class, 'contact']);
Route::get('/houses', [MasterController::class, 'houses']);