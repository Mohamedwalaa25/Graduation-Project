<?php

namespace App\Http\Resources\Api;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */


    /*Edited By Mohamed Walaa
    Edited at 8-5-2025 (Added liked)
    */
    public function toArray(Request $request): array
    {
        $liked = false;
        $userId = Auth::guard('api')->user()->id ?? null;
        if ($userId) {
            $liked = Like::where('user_id', $userId)->where('article_id', $this->id)->exists();
        }

        return [

            'statics' => [

                'title' => $this->title,
                'date' => optional($this->created_at)->format('Y-m-d'),
                'imageUrl' => URL::asset('Backend/Uploades/Articles/' . $this->image_file),
                'viewsCount' => $this->count_views,
                'liked' => $liked ? true : false

            ],
            'descreptions' => $this->descreptionArticles->map(function ($item) {

                return [

                    'title' => $item->title,
                    'content' => $item->content
                ];
            }),
            'createdByAdmin' => $this->admin()->exists() ? true : false,
            'adminName' => "Platform",
            'adminImage' => URL::asset('Backend/assets/img/profile-img.jpg'),
            'userName' => optional($this->user)->name ?? "Platform",
            'userId' => optional($this->user)->id,
            'userImage' => optional($this->user)->image_name
                ? URL::asset('Backend/Uploades/Users/' . $this->user->image_name)
                : URL::asset('Backend/assets/img/profile-img.jpg')

        ];
    }
}
