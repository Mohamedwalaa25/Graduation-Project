<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class UserArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'userName' => $this->user->name,
            'userImage' => URL::asset('Backend/Uploades/Users/' . $this->user->image_name ?? 'profile.png'),
            'title' => $this->title,
            'status' => $this->status == 1 ? true : false,
            'imageUrl' => URL::asset('Backend/Uploades/Articles/' . $this->image_file),
            'date' => optional($this->created_at)->format('Y-m-d'),
            'viewsCount' => $this->count_views,
            'description' => optional($this->descreptionArticles()->first())->content ?? ""

        ];
    }
}
