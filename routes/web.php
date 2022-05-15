<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\UsersController;
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

// Authentication Routes
Auth::routes();

// Frontend Area Routes
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

// Admin Area Routes
Route::prefix('/admin')->middleware('can:update-books')->group(function () {

  Route::get('/', [AdminsController::class, 'index'])->name('admin-index');

  Route::get('/books', [BooksController::class, 'index'])->name('books-index');
  Route::get('/books/{book}', [BooksController::class, 'show'])->name('books-show');
  Route::get('/books/create', [BooksController::class, 'create'])->name('books-create');
  Route::post('/books', [BooksController::class, 'store'])->name('books-index');
  Route::patch('/books/{book}', [BooksController::class, 'update']);
  Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('books-edit');
  Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('books-destroy');

  // Route::resource('/admin/books', 'BooksController');
  Route::resource('/categories', CategoriesController::class);
  Route::resource('/publishers', PublishersController::class);
  Route::resource('/authors', AuthorsController::class);
  Route::resource('/users', UsersController::class)->middleware('can:update-users');
});
