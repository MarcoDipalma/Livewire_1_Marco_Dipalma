<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
