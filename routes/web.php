<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/blog',[PublicController::class,'blog'])->name('blog.blog');
Route::get('/blog/{article}',[PublicController::class,'show'])->name('blog.show');
Route::middleware(['auth'])->group(function(){
    Route::resource('articles', ArticleController::class);
    Route::get('/article/dashoard',[ArticleController::class,'dashboard'])->name('articles.dashboard');
    Route::get('/authors',[AuthorController::class,'index'])->name('authors.index');
    Route::get('/authors/{user}',[AuthorController::class,'show'])->name('authors.show');
    Route::resource('categories', CategoryController::class);
    Route::get('/profile/{user}',[PublicController::class,'profile'])->name('profile');
    Route::put('/profile/update',[PublicController::class, 'update_profile'])->name('profile.update');
});


 

 
Route::get('/auth/{social}/redirect',[ProviderController::class, 'redirect'])->name('social.redirect');
 
Route::get('/auth/{social}/callback',[ProviderController::class, 'callback'])->name('social.callback');