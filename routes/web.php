<?php

use App\Http\Controllers\Admin\SeoController;
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
        Route::get('/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, '__invoke'])->name(
            'ad.catalog'
        );
        Route::get('/{catalog}/{page}', [\App\Http\Controllers\Main\Ad\PageController::class, '__invoke'])->name(
            'ad.page'
        );
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
//});

/* ДАЛЬШЕ ИДЕТ МРАК АДМИНКИ */

//Route::domain('admin.ads-lead.loc')->group(function () {
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, '__invoke'])->name('admin');

    Route::group(['namespace' => 'seo', 'prefix' => 'seo'], function () {
        Route::get('/', [SeoController::class, 'index'])->name('seo.index');
        Route::get('/create', [SeoController::class, 'create'])->name('seo.create');
        Route::post('/store', [SeoController::class, 'store'])->name('seo.store');
        Route::post('/show/{id}', [SeoController::class, 'show'])->name('seo.show');
        Route::get('/edit/{id}', [SeoController::class, 'edit'])->name('seo.edit');
        Route::patch('/update/{id}', [SeoController::class, 'update'])->name('seo.update');
        Route::delete('/destroy/{id}', [SeoController::class, 'destroy'])->name('seo.destroy');
    });
});

//});
