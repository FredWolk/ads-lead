<?php

use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\Banners\BannerAsideController;
use App\Http\Controllers\Admin\Banners\BannerButtonController;
use App\Http\Controllers\Admin\Banners\BannerForumAsideController;
use App\Http\Controllers\Admin\Banners\BannerTopController;
use App\Http\Controllers\Admin\CpaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FiltersController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Main\Articles\{ArticleController, ArticlesController};
use App\Http\Controllers\Main\Cpa\{CatalogController, NetworksController, PageController};
use App\Http\Controllers\Main\Event\EventPageController;
use App\Http\Controllers\Main\Event\EventsController;
use App\Http\Controllers\Main\Forum\ForumBoardController;
use App\Http\Controllers\Main\Forum\ForumController;
use App\Http\Controllers\Main\Forum\ForumThreadsController;
use App\Http\Controllers\Main\Forum\ForumUserController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\Video\{AllVideoController, VideoController};
use App\Http\Controllers\User\Correspondence\UserCorrespondenceController;
use App\Http\Controllers\User\Correspondence\UserCorrespondencePageController;
use App\Http\Controllers\User\UserAlertController;
use App\Http\Controllers\User\UserFavoriteController;
use App\Http\Controllers\User\UserIndexController;
use App\Http\Controllers\User\UserSecurityController;
use App\Http\Controllers\User\UserSubscriptionController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

 Auth::routes();

$url = explode('/', url()->current());
if (isset($url[3]) && $url[3] == 'pt') {
    App::setLocale('pt');
} else {
    App::setLocale('en');
}
Route::group(['prefix' => App::getLocale() == 'en' ? '' : App::getLocale()],function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('index');
    Route::group(['namespace' => 'cpa', 'prefix' => 'cpa-networks'], function () {
        Route::get('/', [NetworksController::class, '__invoke'])->name('cpa');
        Route::get('/{catalog}', [CatalogController::class, '__invoke'])->name('cpa.catalog');
        Route::get('/{catalog}/{link}', [PageController::class, '__invoke'])->name('cpa.page');
    });
    Route::group(['namespace' => 'ad', 'prefix' => 'ad-networks'], function () {
        Route::get('/', [\App\Http\Controllers\Main\Ad\NetworksController::class, '__invoke'])->name('ad');
        Route::get('/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, '__invoke'])->name('ad.catalog');
        Route::get('/{catalog}/{page}', [\App\Http\Controllers\Main\Ad\PageController::class, '__invoke'])->name('ad.page');
    });
    Route::group(['namespace' => 'article', 'prefix' => 'articles'], function () {
        Route::get('/', [ArticlesController::class, '__invoke'])->name('articles');
        Route::get('/{link}', [ArticleController::class, '__invoke'])->name('article');
    });
    Route::group(['namespace' => 'video', 'prefix' => 'video'], function () {
        Route::get('/', [AllVideoController::class, '__invoke'])->name('video');
        Route::get('/{link}', [VideoController::class, '__invoke'])->name('video.page');
    });
    Route::group(['namespace' => 'event', 'prefix' => 'events'], function () {
        Route::get('/', [EventsController::class, '__invoke'])->name('events');
        Route::get('/{event}', [EventPageController::class, '__invoke'])->name('event.page');
    });
    Route::group(['namespace' => 'forum', 'prefix' => 'forum'], function () {
        Route::get('/', [ForumController::class, '__invoke'])->name('forum');
        Route::get('/threads', [ForumThreadsController::class, '__invoke'])->name('forum.threads');
        Route::get('/board', [ForumBoardController::class, '__invoke'])->name('forum.board');
        Route::get('/user', [ForumUserController::class, '__invoke'])->name('forum.user');
    });
    Route::group(['prefix' => 'user', 'middleware' => 'auth'] , function () {
        Route::get('/', [UserIndexController::class, '__invoke'])->name('user.index');
        Route::get('/alerts', [UserAlertController::class, '__invoke'])->name('user.alerts');
        Route::get('/subscriptions', [UserSubscriptionController::class, '__invoke'])->name('user.subscriptions');
        Route::get('/favorite', [UserFavoriteController::class, '__invoke'])->name('user.favorite');
        Route::get('/security', [UserSecurityController::class, '__invoke'])->name('user.security');
        Route::get('/correspondence', [UserCorrespondenceController::class, '__invoke'])->name('user.correspondence');
        Route::get('/correspondence/{page}', [UserCorrespondencePageController::class, '__invoke'])->name('user.correspondence.page');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'] , function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, '__invoke'])->name('admin');
    Route::group(['namespace' => 'filters', 'prefix' => 'filters'], function () {
        Route::get('/{filters}/edit', [FiltersController::class, 'edit'])->name('filters.edit');
        Route::patch('/{filters}', [FiltersController::class, 'update'])->name('filters.update');
    });
    Route::resource('seo', SeoController::class);
    Route::resource('article', AdminArticleController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('cpa', CpaController::class);
    Route::resource('ad', AdController::class);
    Route::resource('event', EventController::class);
    Route::resource('video', \App\Http\Controllers\Admin\VideoController::class);
    Route::resource('button', BannerButtonController::class);
    Route::resource('top', BannerTopController::class);
    Route::resource('aside', BannerAsideController::class);
    Route::resource('forum', BannerForumAsideController::class);
});

Route::group(['prefix' => 'filters'], function (){
   Route::get('/index-calendar', [IndexController::class, 'indexFilter'])->name('index.calendar');
   Route::get('/cpa', [NetworksController::class, 'filter'])->name('cpa.filter');
   Route::get('/ad', [\App\Http\Controllers\Main\Ad\NetworksController::class, 'filter'])->name('ad.filter');
   Route::get('/cpa-catalog/{catalog}', [CatalogController::class, 'filter'])->name('cpa.catalog.filter');
   Route::get('/ad-catalog/{catalog}', [\App\Http\Controllers\Main\Ad\CatalogController::class, 'filter'])->name('ad.catalog.filter');
});
