<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Article\GaleryController;
use App\Http\Controllers\Frontend\Article\NewsController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/', [HomeController::class, 'mock_1'])->name('index');


Route::get('/old', [HomeController::class, 'index'])->name('index_old');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::group(['prefix' => 'products'], function (){
    Route::get('/{main_categories}', [ProductController::class, 'showCategories'])->name('show-categories');

    Route::get('/{main_categories}/{category}/view', [ProductController::class, 'list'])->name('product.list');
});

Route::group(['prefix' => 'article', 'as' => 'article.'], function (){
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
});

Route::get('career', [CareerController::class, 'index'])->name('career');
Route::get('career/{career_id}', [CareerController::class, 'show'])->name('career.show');
Route::post('career/{career_id}/send', [CareerController::class, 'send'])->name('career.send');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
