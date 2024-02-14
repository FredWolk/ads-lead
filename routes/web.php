<?php

use App\Mail\RegisterMail;
use App\Http\Controllers\Main\Articles\{ArticleController, ArticlesController, KnowladgeBaseController};
use App\Http\Controllers\Main\Cpa\{CatalogController, NetworksController, PageController};
use App\Http\Controllers\Main\Event\EventPageController;
use App\Http\Controllers\Main\Event\EventsController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\SendCommentController;
use App\Http\Controllers\Main\Video\{AllVideoController, VideoController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Auth::routes();
$url = explode('/', url()->current());
if (isset($url[3]) && $url[3] == 'pt') {
    $newUrl = str_replace('pt/', '', url()->current());
    \Illuminate\Support\Facades\App::setLocale('en');
    header('Location: ' . $newUrl);
    exit();
}
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/banner-check', [\App\Http\Controllers\Main\ShowBannerController::class, 'views'])->name('banner.check.views');
Route::post('/banner-click', [\App\Http\Controllers\Main\ShowBannerController::class, 'click'])->name('banner.check.click');
Route::get('/private-policy', function () {
    return view('main.policy');
})->name('policy');

Route::get('/shop', [\App\Http\Controllers\Main\ShopController::class, '__invoke'])->name('shop');

Route::group(['namespace' => 'cpa', 'prefix' => 'cpa-networks'], function () {
    Route::get('/', [NetworksController::class, '__invoke'])->name('cpa');
    Route::get('/{catalog}', [CatalogController::class, '__invoke'])->name('cpa.catalog');
    Route::get('/filter/{catalog}', [\App\Http\Controllers\Main\Cpa\FilterSeoController::class, '__invoke'])->name('cpa.seo.catalog');
    Route::get('/{catalog}/{link}', [PageController::class, '__invoke'])->name('cpa.page');
    Route::post('/send-comment', [SendCommentController::class, 'cpaComment'])->name('cpa.comment');
});
Route::group(['namespace' => 'ad', 'prefix' => 'ad-networks'], function () {
    Route::get('/', [\App\Http\Controllers\Main\Ad\NetworksController::class, '__invoke'])->name('ad');
    Route::get('/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, '__invoke'])->name('ad.catalog');
    Route::get('/filter/{catalog}', [\App\Http\Controllers\Main\Ad\FilterSeoController::class, '__invoke'])->name('ad.seo.catalog');
    Route::get('/{catalog}/{page}', [\App\Http\Controllers\Main\Ad\PageController::class, '__invoke'])->name('ad.page');
    Route::post('/send-comment', [SendCommentController::class, 'adComment'])->name('ad.comment');
});
Route::group(['namespace' => 'services', 'prefix' => 'services'], function () {
    Route::get('/', [\App\Http\Controllers\Main\Services\NetworksController::class, '__invoke'])->name('services');
});
Route::group(['namespace' => 'article', 'prefix' => 'articles'], function () {
    Route::get('/', [ArticlesController::class, 'index'])->name('articles');
    Route::get('/base', [KnowladgeBaseController::class, '__invoke'])->name('base');
    Route::get('/{link}', [ArticleController::class, '__invoke'])->name('article');
    Route::get('/author/{link}', [ArticlesController::class, 'author'])->name('article.author');
    Route::get('/tags/{tag}', [ArticlesController::class, 'tag'])->name('article.tag');
    Route::get('/category/{tag}', [ArticlesController::class, 'category'])->name('article.category');
    Route::post('/send-comment', [SendCommentController::class, 'articleComment'])->name('article.comment');
});
Route::group(['namespace' => 'video', 'prefix' => 'video'], function () {
    Route::get('/', [AllVideoController::class, '__invoke'])->name('video');
    Route::get('/{link}', [VideoController::class, '__invoke'])->name('video.page');
});
Route::group(['namespace' => 'vacancies', 'prefix' => 'vacancies'], function () {
    Route::get('/', [\App\Http\Controllers\Main\VacanciesController::class, 'index'])->name('vacancies');
    Route::get('/{link}', [\App\Http\Controllers\Main\VacanciesController::class, 'page'])->name('vacancies.page');
});
Route::group(['namespace' => 'event', 'prefix' => 'events'], function () {
    Route::get('/', [EventsController::class, '__invoke'])->name('events');
    Route::get('/{link}', [EventPageController::class, '__invoke'])->name('event.page');
});

Route::group(['prefix' => 'filters'], function () {
    Route::get('/index-calendar', [IndexController::class, 'indexFilter'])->name('index.calendar');
    Route::get('/cpa', [NetworksController::class, 'filter'])->name('cpa.filter');
    Route::get('/ad', [\App\Http\Controllers\Main\Ad\NetworksController::class, 'filter'])->name('ad.filter');
    Route::get('/cpa-catalog/{catalog}', [CatalogController::class, 'filter'])->name('cpa.catalog.filter');
    Route::get('/ad-catalog/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, 'filter'])->name(
        'ad.catalog.filter'
    );
    Route::get('/events', [EventsController::class, 'filter'])->name('event.filter');
    Route::post('/search', [IndexController::class, 'search'])->name('index.search');
});
Route::get('/confirm-register/{email}', [IndexController::class, 'confirmRegister']);
