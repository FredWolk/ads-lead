<?php

use App\Http\Controllers\Main\Blog\ArticleController;
use App\Http\Controllers\Main\Blog\BlogController;
use App\Http\Controllers\Main\Video\AllVideoController;
use App\Http\Controllers\Main\Video\VideoController;
use App\Http\Controllers\Main\Cpa\{CatalogController, NetworksController, PageController};
use App\Http\Controllers\Main\IndexController;
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



//Auth::routes();

Route::get('/', [IndexController::class, '__invoke'])->name('index');

/**
 * cpa -> страница всех партнерок -> resources/views/cpa/networks
 * cpa.catalog -> страница всех партнерок одной категории (тут это называется вертикаль) -> resources/views/cpa/catalog
 * cpa.page -> страница конкретной партнерки -> resources/views/cpa/page
 */
Route::group(['namespace' => 'cpa', 'prefix' => 'cpa-networks'], function (){
    Route::get('/', [NetworksController::class, '__invoke'])->name('cpa');
    Route::get('/{catalog}', [CatalogController::class, '__invoke'])->name('cpa.catalog');
    Route::get('/{catalog}/{page}', [PageController::class, '__invoke'])->name('cpa.page');
});

/**
 * ad -> страница всех реклам -> resources/views/ad/networks
 * ad.catalog -> страница всех реклам одной категории (тут это называется вертикаль) -> resources/views/ad/catalog
 * ad.page -> страница конкретной рекламы -> resources/views/ad/page
 */
Route::group(['namespace' => 'ad', 'prefix' => 'ad-networks'], function (){
    Route::get('/', [\App\Http\Controllers\Main\Ad\NetworksController::class, '__invoke'])->name('ad');
    Route::get('/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, '__invoke'])->name('ad.catalog');
    Route::get('/{catalog}/{page}', [\App\Http\Controllers\Main\Ad\PageController::class, '__invoke'])->name('ad.page');
});

/**
 * blog -> страница всех статей -> resources/views/blog/blog
 * article -> страница статьи -> resources/views/blog/article
 */
Route::group(['namespace' => 'article', 'prefix' => 'blog'], function (){
    Route::get('/', [BlogController::class, '__invoke'])->name('blog');
    Route::get('/{article}', [ArticleController::class, '__invoke'])->name('article');
});

/**
 * video -> страница видосов -> resources/views/video/all-video
 * video.page -> страница одного видоса -> resources/views/video/video
 */
Route::group(['namespace' => 'video', 'prefix' => 'video'], function (){
    Route::get('/', [AllVideoController::class, '__invoke'])->name('video');
    Route::get('/{video}', [VideoController::class, '__invoke'])->name('video.page');
});
