<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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
Route::get('/', [MainController::class, 'index']);

Route::post('/insertData', [MainController::class, 'insertData']);

Route::get('GeetaGraphic', [MainController::class, 'showData']);

Route::get('/editData/{id}', [MainController::class, 'editData']);

Route::post('/updateData', [MainController::class, 'updateData']);
