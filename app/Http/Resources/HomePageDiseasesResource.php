<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class HomePageDiseasesResource extends JsonResource
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
            'description' => $this->description,
            'image' => $this->images()->exists() ? $this->images()->first()->image : URL::asset('disease.jfif'),
            'imageUrl' => $this->images()->exists() ? $this->images()->first()->image : URL::asset('disease.jfif'),
            'serverity' => 'Common',
            'serverityColor' => null
        ];
    }
}
