<?php

use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CpaController;
use App\Http\Controllers\Admin\FiltersController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Main\Event\EventPageController;
use App\Http\Controllers\Main\Event\EventsController;
use App\Http\Controllers\Main\Forum\ForumController;
use App\Http\Controllers\Main\Articles\{ArticleController, ArticlesController};
use App\Http\Controllers\Main\Cpa\{CatalogController, NetworksController, PageController};
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\Video\{AllVideoController, VideoController};
use Illuminate\Support\Facades\Route;

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


// Auth::routes();
//Route::domain('ads-lead.loc')->group(function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('index');

    /**
     * cpa -> страница всех партнерок -> resources/views/cpa/networks
     * cpa.catalog -> страница всех партнерок одной категории (тут это называется вертикаль) -> resources/views/cpa/catalog
     * cpa.page -> страница конкретной партнерки -> resources/views/cpa/page
     */
    Route::group(['namespace' => 'cpa', 'prefix' => 'cpa-networks'], function () {
        Route::get('/', [NetworksController::class, '__invoke'])->name('cpa');
        Route::get('/{catalog}', [CatalogController::class, '__invoke'])->name('cpa.catalog');
        Route::get('/{catalog}/{page}', [PageController::class, '__invoke'])->name('cpa.page');
    });

    /**
     * ad -> страница всех реклам -> resources/views/ad/networks
     * ad.catalog -> страница всех реклам одной категории (тут это называется вертикаль) -> resources/views/ad/catalog
     * ad.page -> страница конкретной рекламы -> resources/views/ad/page
     */
    Route::group(['namespace' => 'ad', 'prefix' => 'ad-networks'], function () {
        Route::get('/', [\App\Http\Controllers\Main\Ad\NetworksController::class, '__invoke'])->name('ad');
        Route::get('/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, '__invoke'])->name('ad.catalog');
        Route::get('/{catalog}/{page}', [\App\Http\Controllers\Main\Ad\PageController::class, '__invoke'])->name('ad.page');
    });

    /**
     * articles -> страница всех статей -> resources/views/articles/articles
     * article -> страница статьи -> resources/views/articles/article
     */
    Route::group(['namespace' => 'article', 'prefix' => 'articles'], function () {
        Route::get('/', [ArticlesController::class, '__invoke'])->name('articles');
        Route::get('/{article}', [ArticleController::class, '__invoke'])->name('article');
    });

    /**
     * video -> страница видосов -> resources/views/video/all-video
     * video.page -> страница одного видоса -> resources/views/video/video
     */
    Route::group(['namespace' => 'video', 'prefix' => 'video'], function () {
        Route::get('/', [AllVideoController::class, '__invoke'])->name('video');
        Route::get('/{video}', [VideoController::class, '__invoke'])->name('video.page');
    });

    Route::group(['namespace' => 'event', 'prefix' => 'events'], function () {
        Route::get('/', [EventsController::class, '__invoke'])->name('events');
        Route::get('/{event}', [EventPageController::class, '__invoke'])->name('event.page');
    });

    Route::group(['namespace' => 'forum', 'prefix' => 'forum'], function () {
        Route::get('/', [ForumController::class, '__invoke'])->name('forum');
    });


//});

/* ЛИЧНЫЙ КАБИНЕТ */
Route::group(['namespace' => 'user', 'prefix' => 'user'], function (){

});
/* ЛИЧНЫЙ КАБИНЕТ */



/* ДАЛЬШЕ ИДЕТ МРАК АДМИНКИ */

//Route::domain('admin.ads-lead.loc')->group(function () {
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, '__invoke'])->name('admin');
    Route::group(['namespace' => 'seo', 'prefix' => 'seo'], function () {
        Route::get('/', [SeoController::class, 'index'])->name('seo.index');
        Route::get('/create', [SeoController::class, 'create'])->name('seo.create');
        Route::post('/store', [SeoController::class, 'store'])->name('seo.store');
        Route::get('/{seo}', [SeoController::class, 'show'])->name('seo.show');
        Route::get('/{seo}/edit', [SeoController::class, 'edit'])->name('seo.edit');
        Route::patch('/{seo}', [SeoController::class, 'update'])->name('seo.update');
    });
    Route::group(['namespace' => 'filters', 'prefix' => 'filters'], function () {
        Route::get('/{filters}/edit', [FiltersController::class, 'edit'])->name('filters.edit');
        Route::patch('/{filters}', [FiltersController::class, 'update'])->name('filters.update');
    });

    Route::group(['namespace' => 'article', 'prefix' => 'article'], function () {
        Route::get('/', [AdminArticleController::class, 'index'])->name('article.index');
        Route::get('/create', [AdminArticleController::class, 'create'])->name('article.create');
        Route::post('/store', [AdminArticleController::class, 'store'])->name('article.store');
        Route::get('/{article}', [AdminArticleController::class, 'show'])->name('article.show');
        Route::get('/{article}/edit', [AdminArticleController::class, 'edit'])->name('article.edit');
        Route::patch('/{article}', [AdminArticleController::class, 'update'])->name('article.update');
        Route::delete('/{article}', [AdminArticleController::class, 'destroy'])->name('article.destroy');
    });

    Route::group(['namespace' => 'author', 'prefix' => 'author'], function () {
        Route::get('/', [AuthorController::class, 'index'])->name('author.index');
        Route::get('/create', [AuthorController::class, 'create'])->name('author.create');
        Route::post('/store', [AuthorController::class, 'store'])->name('author.store');
        Route::get('/{author}', [AuthorController::class, 'show'])->name('author.show');
        Route::get('/{author}/edit', [AuthorController::class, 'edit'])->name('author.edit');
        Route::patch('/{author}', [AuthorController::class, 'update'])->name('author.update');
        Route::delete('/{author}', [AuthorController::class, 'destroy'])->name('author.destroy');
    });

    Route::group(['namespace' => 'author', 'prefix' => 'cpa'], function () {
        Route::get('/', [CpaController::class, 'index'])->name('cpa.index');
        Route::get('/create', [CpaController::class, 'create'])->name('cpa.create');
        Route::post('/store', [CpaController::class, 'store'])->name('cpa.store');
        Route::get('/{cpa}', [CpaController::class, 'show'])->name('cpa.show');
        Route::get('/{cpa}/edit', [CpaController::class, 'edit'])->name('cpa.edit');
        Route::patch('/{cpa}', [CpaController::class, 'update'])->name('cpa.update');
        Route::delete('/{cpa}', [CpaController::class, 'destroy'])->name('cpa.destroy');
    });

    Route::group(['namespace' => 'author', 'prefix' => 'ad'], function () {
        Route::get('/', [AdController::class, 'index'])->name('ad.index');
        Route::get('/create', [AdController::class, 'create'])->name('ad.create');
        Route::post('/store', [AdController::class, 'store'])->name('ad.store');
        Route::get('/{ad}', [AdController::class, 'show'])->name('ad.show');
        Route::get('/{ad}/edit', [AdController::class, 'edit'])->name('ad.edit');
        Route::patch('/{ad}', [AdController::class, 'update'])->name('ad.update');
        Route::delete('/{ad}', [AdController::class, 'destroy'])->name('ad.destroy');
    });
});

//});
