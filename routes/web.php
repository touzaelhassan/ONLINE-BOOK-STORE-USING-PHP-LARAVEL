<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublishersController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [GalleryController::class, 'index']);

Route::get('/book/{book}', [BooksController::class, 'details'])->name('book-details');
Route::get('/search', [GalleryController::class, 'search'])->name('search');

Route::get('/categories', [CategoriesController::class, 'list'])->name('categories');
Route::get('/categories/{category}', [CategoriesController::class, 'result'])->name('gallery-categories');
Route::get('/categories/search', [CategoriesController::class, 'search'])->name('categories-search');

Route::get('/publishers', [PublishersController::class, 'list'])->name('publishers');
Route::get('/publishers/{publisher}', [PublishersController::class, 'result'])->name('gallery-publishers');
Route::get('/publishers/search', [PublishersController::class, 'search'])->name('publishers-search');

Route::get('/authors', [AuthorsController::class, 'list'])->name('authors');
Route::get('/authors/{author}', [AuthorsController::class, 'result'])->name('gallery-authors');
Route::get('/authors/search', [AuthorsController::class, 'search'])->name('authors-search');

Route::get('/admin', function () {
  return view('admin.layouts.app');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
