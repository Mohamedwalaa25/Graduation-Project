<?php

namespace App\Http\Resources;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
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
            'name' => $this->name,
            'plants' => $this->plants?->map(function ($plant) {
                return [
                    'id' => $plant->id,
                    'name' => $plant->name,
                    'botanical_name' => $plant->botanical_name,
                    'scientific_name' => $plant->scientific_name,
                    // 'also_known_as' => ' “' . implode('”, “', is_array(json_decode($plant->also_known_as, true)) ? json_decode($plant->also_known_as, true) : []) . '”.',
                    'also_known_as' => $plant->also_known_as ,
                    'description' => $plant->description,
                    'genus' => ucwords($plant->genus?->name),
                    'family' => ucwords($plant->family?->name),
                    'order' => ucwords($plant->order?->name),
                    'group' => ucwords($plant->group?->name),
                    'phylum' => ucwords($plant->phylum?->name),
                    'type' => ucwords($plant->type?->name),
                    'drainage' => ucwords($plant->drainage?->name),
                    'section' => ucwords($plant->section?->name),
                    'toughness' => $plant->toughness,
                    'maintenance' => $plant->maintenance,
                    'sunlight' => $plant->sunlight,
                    'hardness_zone' => $plant->hardness_zone,
                    'min_ph' => $plant->min_ph,
                    'max_ph' => $plant->max_ph,
                    'min_tp' => $plant->min_tp,
                    'ideal_min_tp' => $plant->ideal_min_tp,
                    'ideal_max_tp' => $plant->ideal_max_tp,
                    'max_tp' => $plant->max_tp,
                    'water' => $plant->water,
                    'repotting' => $plant->repotting,
                    'fertilizer' => $plant->fertilizer,
                    'misting' => $plant->misting,
                    'pruning' => $plant->pruning,
                    'uses' => $plant->uses,
                    'cluture' => $plant->cluture,
                    // 'pests' => json_decode($plant->pests, true),
                    'pests' => $plant->pests,
                    'diseases' => $plant->diseases,
                    // 'diseases' => json_decode($plant->diseases, true),

                    'tags' => $plant->tags->map(fn($tag) => $tag->name)->toArray(),

                    'images' => [
                        'header_image' => $plant->images->first()?->image
                            // ? asset('Backend/Uploades/Plants/' . $plant->images->first()->image)
                           ? URL('https://0290-197-121-150-179.ngrok-free.app/Backend/Uploades/Plants/' . $plant->images->first()->image)
                            : asset('assets/images/deatails_carrot.jpg'),
                    ],

                    'similar_plants' => Plant::where('section_id', $plant->section_id)
                        ->where('id', '!=', $plant->id)
                        ->take(5)
                        ->get()
                        ->map(function ($similar) {
                            return [
                                'id' => $similar->id,
                                'name' => $similar->name,
                                'image' => $similar->images->first()?->image
                                    // ? asset('Backend/Uploades/Plants/' . $similar->images->first()->image)
                                   ? URL('https://0290-197-121-150-179.ngrok-free.app/Backend/Uploades/Plants/' . $similar->images->first()->image)
                                    : asset('assets/images/deatails_carrot.jpg'),
                            ];
                        }),

                ];
            }),
        ];
    }
}
