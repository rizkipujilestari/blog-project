<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManager;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/blog/{slug}', [PageController::class, 'show'])->name('blog.show');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth', 'userAccess:admin,member'])->group(function () {
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/articles/new', [ArticleController::class, 'create'])->name('newpost');
    Route::get('/articles/{slug}', [ArticleController::class, 'show']);
    Route::get('/articles/edit/{slug}', [ArticleController::class, 'edit']);
    Route::post('/articles/{slug}', [ArticleController::class, 'update']);
    Route::delete('/articles/{slug}', [ArticleController::class, 'destroy']);
    Route::post('/articles', [ArticleController::class, 'store']);
    
    Route::get('/comments', [CommentController::class, 'index'])->name('comments');
    Route::post('/comment', [CommentController::class, 'store']);

    Route::get('/profile', [PageController::class, 'profile']);
});