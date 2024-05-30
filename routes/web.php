<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/blog',[PublicController::class,'blog'])->name('blog.blog');
Route::get('/blog/{article}',[PublicController::class,'show'])->name('blog.show');
Route::middleware(['auth'])->group(function(){
    Route::resource('articles', ArticleController::class);
    Route::get('/article/dashoard',[ArticleController::class,'dashboard'])->name('articles.dashboard');
});