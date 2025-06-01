<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\GetLikesByArticleIdRequest;
use App\Http\Requests\Api\StoreLikeRequest;
use App\Http\Resources\Api\LikeResource;
use App\Models\Article;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LikeController extends Controller
{
    public function store(StoreLikeRequest $request)
    {

        $articleId = $request->article_id;

        $userId = Auth::guard('api')->user()->id;

        if (Like::where('user_id', $userId)->where('article_id', $articleId)->exists()) {
            return apiResponse(
                null,
                'You have already liked this article',
                409
            );
        }

        Like::create([
            'user_id' => $userId,
            'article_id' =>  $articleId

        ]);


        // Get updated likes count
        $likesCount = Like::where('article_id', $articleId)->count();

        return apiResponse(
            [

                'likes_count' => $likesCount
            ],
            'Article liked successfully',
            201
        );
    }


    public function getByArticle(GetLikesByArticleIdRequest $request)
    {

        $articleId = $request->article_id;

        $article = Article::find($articleId);

        if (!$article->likes()->exists()) {
            return apiResponse(
                null,
                'No likes found for this article',
                200
            );
        }

        $articleLikesCount = $article->likes()->count();


        $articleLikes = $article->likes()->with(['user' => function ($query) {
            $query->select('id', 'name', 'image_name');
        }])->get();

        return  apiResponse([

            'articleLikesCount' =>  $articleLikesCount,
            'likes' => LikeResource::collection($articleLikes),
        ]);
    }


    /*added By Mohamed Walaa
            Edited at 8-5-2025
            */
    public function delete(StoreLikeRequest $request)
    {
        $articleId = $request->article_id;

        $user = Auth::guard('api')->user();
      

        $userId = $user->id;

        $like = Like::where('user_id', $userId)->where('article_id', $articleId)->first();

        if (!$like) {
            return apiResponse(null, 'Like not found', 404);
        }

        $like->delete();

        return apiResponse(null,'Article unliked successfully', 200);
    }
}
