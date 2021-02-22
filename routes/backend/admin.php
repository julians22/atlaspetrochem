<?php

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



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
