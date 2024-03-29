<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index']);
Route::get('/todos', [TodoController::class, 'index']);  
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos', [TodoController::class, 'store']);
Route::get('/todos/{todo}', [TodoController::class ,'show']);
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::post('/todos/{todo}', [TodoController::class,'achievement']);