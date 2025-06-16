<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\SiteMapController;
use App\Http\Controllers\Api\VideoApiController;
use App\Http\Controllers\Api\CategorieController;
use App\Http\Controllers\Api\SliderApiController;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\SettingApiController;
use App\Http\Controllers\Api\SubCategorieController;
use App\Http\Controllers\Api\PendingArticleController;



Route::get('/slider', [SliderController::class, 'get']);

Route::get('/settings', [SettingApiController::class, 'get']);


Route::get('/site-map', [SiteMapController::class, 'generateSitemap']);


Route::get('/categories', [CategorieController::class, 'get']);

Route::get('/sub-categories/get-by-categorie-id', [SubCategorieController::class, 'getByCategorieId']);

Route::get('/get-articles-by-sub-categorie-id', [ArticleController::class, 'getBySubCategorieId']);
Route::get('/get-random', [ArticleController::class, 'getRandom']);

Route::get('/find', [ArticleController::class, 'find'])->name('article.find');

Route::prefix('/auth')->controller(AuthController::class)->group(function () {

    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/me', 'me');
    Route::post('/logout', 'logout');
});
Route::middleware('isUser')->group(function () {

    Route::prefix('article/pending')->controller(PendingArticleController::class)->group(function () {


        Route::post('/store', 'store');
    });

    Route::get('user/articles', [UserController::class, 'articles']);
    Route::post('user/update', [UserController::class, 'update']);
    Route::post('comment/create', [CommentController::class, 'store']);

    Route::post('like/create', [LikeController::class, 'store']);
    Route::delete('like/delete', [LikeController::class, 'delete']);
});

Route::get('comments-get-by-article-id', [CommentController::class, 'getByArticleId']);

Route::get('likes-get-by-article-id', [LikeController::class, 'getByArticle']);

Route::get('article/search', [ArticleController::class, 'search']);

Route::post('send-mail', [ContactController::class, 'sendMail']);

Route::get('/settings', [App\Http\Controllers\Api\SettingController::class, 'get']);

Route::get('user/{userId}', [UserController::class, 'find']);

Route::get('user/get-articles-by-userId/{userId}', [UserController::class, 'getArticlesByUserId']);
