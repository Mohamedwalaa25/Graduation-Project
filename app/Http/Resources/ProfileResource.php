<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'image_name' => $this->image_name
                ? asset('storage/' . $this->image_name)
                : asset('assets/images/user.jpg'),
            'points' => $this->points
        ];
    }
}
