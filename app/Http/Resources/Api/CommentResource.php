<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'content' => $this->content,
            'created_at_human' => $this->created_at->diffForHumans(),
            'userName' => $this->user->name,
            'userId' => $this->user_id,
            'userImage' => URL::asset('Backend/Uploades/Users/' . $this->user->image_name ?? 'profile.png')
        ];
    }
}
