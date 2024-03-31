<?php

use App\Http\Controllers\User\Correspondence\UserCorrespondenceController;
use App\Http\Controllers\User\Correspondence\UserCorrespondencePageController;
use App\Http\Controllers\User\UserAlertController;
use App\Http\Controllers\User\UserFavoriteController;
use App\Http\Controllers\User\UserIndexController;
use App\Http\Controllers\User\UserSecurityController;
use App\Http\Controllers\User\UserSettingsController;
use App\Http\Controllers\User\UserSubscriptionController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/', [UserIndexController::class, '__invoke'])->name('user.index');
    Route::get('/alerts', [UserAlertController::class, '__invoke'])->name('user.alerts');
    Route::post('/read-alerts', [UserAlertController::class, 'readNotification'])->name('user.alerts.read');
    Route::get('/subscriptions', [UserSubscriptionController::class, 'index'])->name('user.subscriptions');
    Route::post('/subscribe', [UserSubscriptionController::class, 'subscribe'])->name('forum.subscribe');
    Route::get('/favorite', [UserFavoriteController::class, '__invoke'])->name('user.favorite');
    Route::get('/security', [UserSecurityController::class, '__invoke'])->name('user.security');
    Route::get('/correspondence', [UserCorrespondenceController::class, '__invoke'])->name('user.correspondence');
    Route::get('/correspondence/{id}', [UserCorrespondencePageController::class, '__invoke'])->name(
        'user.correspondence.page'
    );
    Route::post('/correspondence-send/{chat}',[\App\Http\Controllers\User\ChatController::class, 'send'])->name('chat.message.send');
    Route::delete('/correspondence-delete/{chat?}',[\App\Http\Controllers\User\ChatController::class, 'delete'])->name('chat.message.delete');

    Route::group(['prefix' => 'settings'], function () {
        Route::post('/change-password', [UserSettingsController::class, 'changePass'])->name(
            'setting.password.change'
        );
        Route::post('/change-status', [UserSettingsController::class, 'changeStatus'])->name(
            'setting.status.change'
        );
        Route::post('/change-photo', [UserSettingsController::class, 'changePhoto'])->name('setting.photo.change');
        Route::post('/change-name', [UserSettingsController::class, 'changeName'])->name('setting.change.name');
    });
});
