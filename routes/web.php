<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('index');
});

Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/details/{todo}', [TodoController::class, 'details']);
Route::get('edit/{todo}', [TodoController::class, 'edit']);
Route::post('update/{todo}', [TodoController::class, 'update']);
Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::post('store-data', [TodoController::class, 'store']);
