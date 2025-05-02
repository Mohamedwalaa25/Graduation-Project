<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Resources\HomePageDiseasesResource;
use App\Models\Plant;
use App\Models\Package;
use App\Models\Section;
use App\Traits\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SearchResource;
use App\Http\Resources\PackageResoucre;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ShowPlantResource;
use App\Models\Disease;
use App\Models\DiseaseUser;

class HomeController extends Controller
{
    use Response;
    public function search(){

    // $plants = Plant::with('section')->get();

    $sections = Section::with('plants')->get();

    return $this->sendResponse( SearchResource::collection($sections), 'All Plants' , 200);
    }


    public function show ($id){

        $plant = Plant::with('section')->find($id);

        return $this->sendResponse(new ShowPlantResource($plant), 'Get Plant Success' , 200);
    }


    public function index()
    {
        $topDiseases = Disease::whereHas('diseaseUser')->with('images')
            ->withCount('diseaseUser')
            ->orderByDesc('disease_user_count')
            ->limit(10)
            ->get();

        $count = $topDiseases->count();

        if ($count < 10) {
            $additionalDiseases = Disease::whereNotIn('id', $topDiseases->pluck('id'))
                ->inRandomOrder()
                ->limit(10 - $count)
                ->get();

            $homePageDiseases = $topDiseases->merge($additionalDiseases);
        } else {
            $homePageDiseases = $topDiseases;
        }

        if ($homePageDiseases->isEmpty()) {
            return $this->sendResponse([], 'Not Found ', 404);
        }
        return $this->sendResponse(HomePageDiseasesResource::collection($homePageDiseases), 'Get Diseases Success', 200);
    }
}
