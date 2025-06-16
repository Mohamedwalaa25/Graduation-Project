<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;

class SettingController extends Controller
{
    public function get()
    {

        $settings = Setting::all();

        if ($settings->isEmpty()) {

            return apiResponse([], "No data found ", 404);
        }

        return apiResponse(SettingResource::collection($settings));
    }
}
