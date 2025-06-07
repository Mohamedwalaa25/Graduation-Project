<?php

use App\Http\Controllers\Dashboard\Articles\ArticleController;
use App\Http\Controllers\Dashboard\NotificationController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard/article')->controller(ArticleController::class)->group(function () {
    Route::post('/upload-image', 'uploadeImageDescription')->name('upload.image');
});


Route::view('/dashboard/notifications/partial', 'dashboard.layouts.notifications')->name('dashboard.notifications.partial');

Route::get('/dashboard/notifications/mark-all', [NotificationController::class, 'markAll'])->name('dashboard.notifications.markAll');
