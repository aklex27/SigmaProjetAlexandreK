<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PostController::class, 'index'])->name('postList');
Route::get('/articles/ajouter', [PostController::class, 'add'])->name('postAdd')->middleware('auth');
Route::post('/articles/ajouter', [PostController::class, 'store'])->name('postStore')->middleware('auth');
Route::get('/articles/{id}', [PostController::class, 'details'])->name('postDetails');
Route::put('/articles/{id}/modifier', [PostController::class, 'update'])->name('postUpdate')->middleware('auth');
Route::put('/articles/{id}/modifier/image', [PostController::class, 'updatePicture'])->name('postUpdatePicture')->middleware('auth');
Route::delete('/articles/{id}/supprimer', [PostController::class, 'delete'])->name('postDelete')->middleware('auth');

Route::post('/commentaires/{postId}', [CommentController::class, 'store'])->name('commentAdd');
Route::delete('/commentaires/{id}', [CommentController::class, 'delete'])->name('commentDelete');

Route::get('/categories', [CategoryController::class, 'index'])->name('categoryList');
Route::get('/categories/ajouter', [CategoryController::class, 'add'])->name('categoryAdd');
Route::post('/categories/ajouter', [CategoryController::class, 'store'])->name('categoryStore');
Route::put('/categories/{id}/modifier', [CategoryController::class, 'update'])->name('categoryUpdate');
Route::delete('/categories/{id}/supprimer', [CategoryController::class, 'delete'])->name('categoryDelete');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('sendMail');

require __DIR__.'/auth.php';
