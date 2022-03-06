<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/portfolio', [PortfolioController::class, 'show']);

// Create
Route::get('/post-feed/create', [BlogController::class, 'create']);
Route::post('/articles', [BlogController::class, 'store']);

// Read
Route::get('/post-feed', [BlogController::class, 'index'])->name('articles.index');
Route::get('/post-feed/{article}', [BlogController::class, 'show'])->name('articles.show');

// Update
Route::get('/post-feed/{article}/edit', [BlogController::class, 'edit']);
Route::put('/articles/{article}', [BlogController::class, 'update']);

// Delete
Route::delete('/articles/{article}', [BlogController::class, 'destroy']);

// Create for the Faqs
Route::get('/faq/create', [FAQController::class, 'create']);
Route::post('/faqs', [FAQController::class, 'store']);

// Read
Route::get('/faq', [FAQController::class, 'index'])->name('faqs.index');
Route::get('/faq/{faq}', [FAQController::class, 'show'])->name('faqs.show');


// Update
Route::get('/faq/{faq}/edit', [FAQController::class, 'edit']);
Route::put('/faqs/{faq}', [FAQController::class, 'update']);

// Delete
Route::delete('/faqs/{faq}', [FAQController::class, 'destroy']);
