<?php

namespace App\Http\Controllers\ApiMobile;

use App\Models\Plant;
use App\Models\Section;
use App\Traits\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SearchResource;
use App\Http\Resources\ShowPlantResource;

class PlantController extends Controller
{
    
    use Response;
    public function index(){


    $sections = Section::with('plants')->get();

    return $this->sendResponse( SearchResource::collection($sections), 'All Plants' , 200);
    }


    public function show ($id){

        $plant = Plant::with('section')->find($id);

        return $this->sendResponse(new ShowPlantResource($plant), 'Get Plant Success' , 200);
    }
}
