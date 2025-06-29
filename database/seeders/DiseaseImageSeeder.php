<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\DiseaseImage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiseaseImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $images = [
            'AppleCedarRust1.JPG',
            'AppleCedarRust2.JPG',
            'AppleCedarRust3.JPG',
            'AppleCedarRust4.JPG',
            'AppleScab1.JPG',
            'AppleScab2.JPG',
            'AppleScab3.JPG',
            'CornCommonRust1.JPG',
            'CornCommonRust2.JPG',
            'CornCommonRust3.JPG',
            'PotatoEarlyBlight1.JPG',
            'PotatoEarlyBlight2.JPG',
            'PotatoEarlyBlight3.JPG',
            'PotatoEarlyBlight4.JPG',
            'PotatoEarlyBlight5.JPG',
            'PotatoHealthy1.JPG',
            'PotatoHealthy2.JPG',
            'TomatoEarlyBlight1.JPG',
            'TomatoEarlyBlight2.JPG',
            'TomatoEarlyBlight3.JPG',
            'TomatoEarlyBlight4.JPG',
            'TomatoEarlyBlight5.JPG',
            'TomatoEarlyBlight6.JPG',
            'TomatoHealthy1.JPG',
            'TomatoHealthy2.JPG',
            'TomatoHealthy3.JPG',
            'TomatoHealthy4.JPG',
            'TomatoYellowCurlVirus1.JPG',
            'TomatoYellowCurlVirus2.JPG',
            'TomatoYellowCurlVirus3.JPG',
            'TomatoYellowCurlVirus4.JPG',
            'TomatoYellowCurlVirus5.JPG',
            'TomatoYellowCurlVirus6.JPG',
        ];

        Disease::all()->each(function ($disease) use ($images) {
            DiseaseImage::create([
                'disease_id' => $disease->id,
                'image' => $images[array_rand($images)],
            ]);
        });
    }
}
