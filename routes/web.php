<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect(route('admin.articles.index'));
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->prefix('admin/')->group(function () {
    Route::get('/', [AdminController::class , 'index']);
    Route::resource('articles', ArticleController::class);

});

Route::get('/blog', [ArticleController::class, 'index_blog'])->name('blog.index');
Route::get('/blog/article/{article}', [ArticleController::class, 'show_blog'])->name('blog.article.show');
