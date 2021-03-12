<?php

use App\Http\Controllers\Backend\Articles\NewsController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\DashboardController;
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
        Route::get('delete', [NewsController::class, 'delete'])->name('career.delete-permanently');
        Route::get('restore', [NewsController::class, 'restore'])->name('career.restore');
    });
});



Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
