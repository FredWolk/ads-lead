<?php

use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\AdSeoFilterController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleSeoTagsController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\Banners\BannerAsideController;
use App\Http\Controllers\Admin\Banners\BannerButtonController;
use App\Http\Controllers\Admin\Banners\BannerForumAsideController;
use App\Http\Controllers\Admin\Banners\BannerPopupController;
use App\Http\Controllers\Admin\Banners\BannerTopController;
use App\Http\Controllers\Admin\CategoryArticlesController;
use App\Http\Controllers\Admin\ComplaintController;
use App\Http\Controllers\Admin\CpaController;
use App\Http\Controllers\Admin\CpaSeoFilterController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FiltersController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\LikeController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ShopCategoryController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\TopickController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('admin');
    Route::group(['namespace' => 'filters', 'prefix' => 'filters'], function () {
        Route::get('/{filters}/edit', [FiltersController::class, 'edit'])->name('filters.edit');
        Route::patch('/{filters}', [FiltersController::class, 'update'])->name('filters.update');
    });
    Route::resource('seo', SeoController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('article-tags', ArticleSeoTagsController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('category-shop', ShopCategoryController::class);
    Route::resource('vacancies', VacanciesController::class);
    Route::resource('topick', TopickController::class);
    Route::resource('cpa', CpaController::class);
    Route::resource('article-category', CategoryArticlesController::class);
    Route::resource('ad', AdController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('event', EventController::class);
    Route::resource('video', VideoController::class);
    Route::resource('button', BannerButtonController::class);
    Route::resource('popup', BannerPopupController::class);
    Route::resource('top', BannerTopController::class);
    Route::resource('aside', BannerAsideController::class);
    Route::resource('images', ImagesController::class);
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::resource('forum', BannerForumAsideController::class);
    Route::group(['prefix' => 'comments', 'namespace' => 'comments'], function () {
        Route::group(['prefix' => 'article'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Comments\ArticleController::class, 'index'])->name(
                'comments.article.index'
            );
            Route::put(
                '/success/{articleComments}',
                [\App\Http\Controllers\Admin\Comments\ArticleController::class, 'success']
            )->name('comments.article.success');
            Route::delete(
                '/delete/{articleComments}',
                [\App\Http\Controllers\Admin\Comments\ArticleController::class, 'delete']
            )->name('comments.article.delete');
        });
        Route::group(['prefix' => 'cpa'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Comments\CpaController::class, 'index'])->name(
                'comments.cpa.index'
            );
            Route::put('/success/{cpaComments}', [\App\Http\Controllers\Admin\Comments\CpaController::class, 'success']
            )->name('comments.cpa.success');
            Route::delete('/delete/{cpaComments}', [\App\Http\Controllers\Admin\Comments\CpaController::class, 'delete']
            )->name('comments.cpa.delete');
        });
        Route::group(['prefix' => 'adv'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Comments\AdvController::class, 'index'])->name(
                'comments.adv.index'
            );
            Route::put('/success/{advComments}', [\App\Http\Controllers\Admin\Comments\AdvController::class, 'success']
            )->name('comments.adv.success');
            Route::delete('/delete/{advComments}', [\App\Http\Controllers\Admin\Comments\AdvController::class, 'delete']
            )->name('comments.adv.delete');
        });
    });
    Route::group(['prefix' => 'complaint'], function (){
        Route::get('index', [ComplaintController::class, 'index'])->name('complaint.index');
        Route::get('page/{id}', [ComplaintController::class, 'page'])->name('complaint.page');
        Route::delete('delete/{id}', [ComplaintController::class, 'delete'])->name('complaint.delete');
    });

    Route::post('like', [LikeController::class, 'like'])->name('forum.like');

    Route::group(['prefix' => 'seo-filters'], function () {
        Route::resource('ads-seo-filter', AdSeoFilterController::class);
        Route::resource('cpa-seo-filter', CpaSeoFilterController::class);
    });
    Route::post('/search', [IndexController::class, 'adminSearch'])->name('admin.search');
});
