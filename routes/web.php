<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/blog',[PublicController::class,'blog'])->name('blog.blog');
Route::get('/blog/{article}',[PublicController::class,'show'])->name('blog.show');
Route::middleware(['auth'])->group(function(){
    Route::resource('articles', ArticleController::class);
});