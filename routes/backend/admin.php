<?php

use App\Http\Controllers\Backend\Articles\NewsController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\Products\CategoryController;
use App\Http\Controllers\Backend\Products\ProductController;
use App\Http\Controllers\Backend\Sliders\BannerSliderController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'slider', 'as' => 'slider.'], function (){
    Route::group(['prefix' => 'banner'], function() {
        Route::get('/', [BannerSliderController::class, 'index'])->name('banner');
        Route::get('create', [BannerSliderController::class, 'create'])->name('banner.create');
        Route::post('/', [BannerSliderController::class, 'store'])->name('banner.store');
            Route::group(['prefix' => '{banner}'], function (){
                Route::get('edit', [BannerSliderController::class, 'edit'])->name('banner.edit');
                Route::patch('/', [BannerSliderController::class, 'update'])->name('banner.update');
            });
    });
});

Route::group(['prefix' => 'articles', 'as' => 'articles.'], function (){
    Route::group(['prefix' => 'news'], function (){
        Route::get('/', [ NewsController::class, 'index'])->name('news');
        Route::get('/deleted', [ NewsController::class, 'getDeleted'])->name('news.deleted');
        Route::get('/create', [ NewsController::class, 'create'])->name('news.create');
        Route::post('/', [ NewsController::class, 'store'])->name('news.store');
        Route::group(['prefix' => '{news}'], function (){
            Route::get('edit', [NewsController::class, 'edit'])->name('news.edit');
            Route::patch('/', [NewsController::class, 'update'])->name('news.update');
            Route::get('show', [NewsController::class, 'show'])->name('news.show');
            Route::delete('/', [NewsController::class, 'destroy'])->name('news.destroy');
            Route::get('delete', [NewsController::class, 'delete'])->name('news.delete-permanently');
            Route::get('restore', [NewsController::class, 'restore'])->name('news.restore');
        });
    });
});

Route::group(['prefix' => 'career'], function () {
    Route::get('/', [CareerController::class, 'index'])->name('career');
    Route::get('/create', [CareerController::class, 'create'])->name('career.create');
    Route::post('/', [CareerController::class, 'store'])->name('career.store');
    Route::group(['prefix' => '{career}'], function () {
        Route::get('edit', [CareerController::class, 'edit'])->name('career.edit');
        Route::patch('/', [CareerController::class, 'update'])->name('career.update');
        Route::get('show', [CareerController::class, 'show'])->name('career.show');
        Route::delete('/', [CareerController::class, 'destroy'])->name('career.destroy');
        Route::get('delete', [CareerController::class, 'delete'])->name('career.delete-permanently');
        Route::get('restore', [CareerController::class, 'restore'])->name('career.restore');
        Route::get('toggleActive', [CareerController::class, 'toggleActive'])->name('career.toggle-active');
    });
});

Route::group(['prefix' => 'faq'], function (){
    Route::get('/', [FaqController::class, 'index'])->name('faqs');
    Route::get('create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('store', [FaqController::class, 'store'])->name('faq.store');
    Route::group(['prefix' => '{faq}'], function (){
        Route::get('show', [FaqController::class, 'show'])->name('faq.show');
        Route::get('edit', [FaqController::class, 'edit'])->name('faq.edit');
        Route::patch('/', [FaqController::class, 'update'])->name('faq.update');
        Route::delete('/', [FaqController::class, 'destroy'])->name('faq.destroy');
    });
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function (){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::group(['prefix' => '{product}'], function(){
        Route::get('/show', [ProductController::class, 'show'])->name('show');
        Route::get('/edit', [ProductController::class, 'edit'])->name('edit');
        Route::patch('/', [ProductController::class, 'update'])->name('update');
        Route::delete('/', [ProductController::class, 'destroy'])->name('destroy');
    });
    Route::group(['prefix' => 'category', 'as' => 'category.'], function (){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::group(['prefix' => '{category}'], function (){
            Route::get('/show', [CategoryController::class, 'show'])->name('show');
            Route::get('/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::patch('/', [CategoryController::class, 'update'])->name('update');
            Route::delete('/', [CategoryController::class, 'destroy'])->name('destroy');
        });
    });
});


Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
