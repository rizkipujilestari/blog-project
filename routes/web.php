<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/blog/{slug}', [PageController::class, 'show'])->name('blog.show');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth', 'userAccess:admin,member'])->group(function () {
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/new', [ArticleController::class, 'create']);
    Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article.show');
    Route::post('/articles', [ArticleController::class, 'store']);
});