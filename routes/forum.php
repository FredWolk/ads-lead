<?php

use App\Http\Controllers\Main\Forum\ForumBoardController;
use App\Http\Controllers\Main\Forum\ForumController;
use App\Http\Controllers\Main\Forum\ForumCreateThreadsController;
use App\Http\Controllers\Main\Forum\ForumThreadsController;
use App\Http\Controllers\Main\Forum\ForumUserController;
use App\Http\Controllers\Main\Forum\TradeController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'forum', 'prefix' => 'forum'], function () {
    Route::get('/', [ForumController::class, '__invoke'])->name('forum');
    Route::get('/threads/{link}', [ForumThreadsController::class, 'index'])->name('forum.threads');
    Route::get('/thread/{link}', [ForumThreadsController::class, 'filter'])->name('forum.filter');
    Route::get('/threads/{theme}/{link}', [ForumBoardController::class, '__invoke'])->name('forum.board');
    Route::get('/user', [ForumUserController::class, '__invoke'])->name('forum.user');
    Route::get('/create-threads/{link}', [ForumCreateThreadsController::class, '__invoke'])->name(
        'forum.create.threads'
    )->middleware('auth');
    Route::get('/edit-threads/{trade}', [TradeController::class, 'edit'])->name('edit.thread');
    Route::post('/update-threads/{trade}', [TradeController::class, 'update'])->name('update.thread');

    Route::post('/store-threads-comment/{threads}', [TradeController::class, 'createComment'])->name(
        'store.thread.comment'
    );
    Route::delete('/delete-threads-comment/{comment?}', [TradeController::class, 'deleteComment'])->name(
        'delete.thread.comment'
    );
    Route::post('/store-threads', [TradeController::class, 'store'])->name('store.thread');
    Route::delete('/delete-threads/{trade?}', [TradeController::class, 'deleteThread'])->name('delete.thread');
    Route::post('/complaint', [TradeController::class, 'complaint'])->name('complaint');
});
