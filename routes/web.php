<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

Route::get('/',[PageController::class, 'WelcomeView'])->name('welcome');
Route::get('/article',[ArticleController::class, 'ArticlesView'])->name('articles');
Route::get('/add-article',[ArticleController::class, 'ArticleCreate'])->middleware('auth')->name('add-article');
Route::get('/contact-us',[ContactController::class, 'ContactView'])->name('contact-us');
Route::get('/dashboard',[PageController::class, 'Dashboard'])->name('contact-us');
Route::post('/store-article',[ArticleController::class, 'store'])->middleware('auth')->name('store-article');
Route::post('/contact-us-success',[ContactController::class, 'ContactSuccess'])->name('contact-success');
Route::resource('categories',CategoryController::class);