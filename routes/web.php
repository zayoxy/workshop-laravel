<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
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

//...->name($route_name) gives the name that can be used in view using route($route_name)!
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

// Manual way, verbose but explicit
// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::get('books/create', [BookController::class, 'create'])->name('books.create');
// Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
// Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
// Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// Automatic way, automatic but implicit --> configuration over configuration
Route::resource('books', BookController::class);

Route::get('/order', [BookController::class, 'order'])->name('books.order');
