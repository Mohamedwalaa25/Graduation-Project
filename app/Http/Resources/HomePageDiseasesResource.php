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
    $position = $this->position ?? null;

    $serverity = 'Common';
    $serverityColor = '0xFFF98E01'; // orange

    if ($position === 2) {
        $serverity = 'Common';
        $serverityColor = '0xFFF98E01'; // orange
    } elseif ($position === 3) {
        $serverity = 'Severe';
        $serverityColor = '0xFFD40F0F'; //red
    } elseif ($position === 4) {
        $serverity = 'Mild';
        $serverityColor = '0xff3E7B27'; // green
    }elseif ($position === 5) {
        $serverity = 'Mild';
        $serverityColor = '0xff3E7B27'; // green
    }

    


    return [
        'origin_name' => $this->origin_name,
        'description' => $this->description,
        'image' => $this->images()->exists() ? $this->images()->first()->image : URL::asset('disease.jfif'),
        'imageUrl' => $this->images()->exists() ? $this->images()->first()->image : URL::asset('disease.jfif'),
        'serverity' => $serverity,
        'serverityColor' => $serverityColor
    ];
}
}
