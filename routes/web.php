<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contacts', [PublicController::class, 'contacts'])->name('contacts');
Route::post('/contact-request-submit', [PublicController::class, 'contactRequestSubmit'])->name('contact-request-submit');
Route::get('/contact-request-result', [PublicController::class, 'contactRequestResult'])->name('contact-request-result');
Route::get('/redirect-to-{social}', [PublicController::class, 'socialRedirect'])->name('socialRedirect');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/store/result', [ArticleController::class, 'storeresult'])->name('article.store-result');
Route::get('/article/all', [ArticleController::class, 'show'])->name('article.all');
Route::get('/article/{id}/detail', [ArticleController::class, 'detail'])->name('article.detail');
