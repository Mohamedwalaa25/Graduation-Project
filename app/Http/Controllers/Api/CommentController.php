<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreCommentRequest;
use App\Http\Resources\Api\CommentResource;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(StoreCommentRequest $request)
    {
        try {
            $user = Auth::guard('api')->user();

            $comment = Comment::create([
                'content' => $request->validated('content'),
                'user_id' => $user->id,
                'article_id' => $request->validated('article_id'),
            ]);

            return apiResponse(
                $comment,
                'Comment added successfully',
                201
            );
        } catch (\Exception $e) {
            return apiResponse(
                null,
                'Failed to add comment: ' . $e->getMessage(),
                500
            );
        }
    }

    public function getByArticleId(Request $request)
    {

        $articleId = $request->article_id;

        $article = Article::find($articleId);

        if (!$article->comments()->exists()) {

            return apiResponse(
                null,
                'No comments found for this article',
                200
            );
        }

        $comments = $article->comments()->with(['user' => function ($query) {
            $query->select('id', 'name', 'image_name');
        }])->get();

        return apiResponse(CommentResource::collection($comments));
    }
}
