<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
})->name('input');
Route::post('/create', [BookController::class, 'createBook'])->name('createBook');
Route::get('/read', [BookController::class, 'readBook'])->name('readBook');
Route::get('/update/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::patch('/updating/{id}', [BookController::class, 'updatingBook'])->name('updatingBook');
Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');