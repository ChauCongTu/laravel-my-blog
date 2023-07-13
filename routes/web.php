<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/{slug}-{id}', [CategoriesController::class, 'show'])->where(['slug' => '.+', 'id' => '[0-9]+'])->name('category.show');

Route::get('/{slug}-{id}.html', [PostController::class, 'show'])->where(['slug' => '.+', 'id' => '[0-9]+'])->name('post.show');

Route::post('/submit_comment', [PostController::class, 'comment'])->name('post.comment');


// Admin route
Route::get('/dang-nhap.html', [AuthController::class, 'login'])->name('login');
Route::post('/dang-nhap.html', [AuthController::class, 'handleLogin'])->name('login');
Route::prefix('admin')->group(function() {

});
