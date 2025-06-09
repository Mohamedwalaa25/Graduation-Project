<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     DB::table('diseases')->insert([
    //         'name' => 'Apple___Apple_scab',
    //         'origin_name' => 'Apple Scab',
    //         'scientific_name' => 'Venturia inaequalis',
    //         'also_know_as' => json_encode(["Apple Scab", "Black spot of apple"]),
    //         'type_disease' => "Fungal disease\r\n\r\n",
    //         'description' => 'Apple scab is a common fungal disease that affects apple trees, causing dark, rough, scabby lesions on leaves, fruit, and sometimes young twigs. It reduces fruit quality and tree vitality, especially in wet and humid conditions.',
    //         'created_at' => Carbon::parse('2025-03-19 19:12:50'),
    //         'updated_at' => Carbon::parse('2025-03-19 19:12:50'),
    //     ]);
    //     DB::table('symptoms')->insert([
    //         'title' => 'Leaf Symptoms',
    //         'description' => 'Small olive-green or dark spots appear on the upper surface of young leaves, gradually becoming velvety and black, often causing leaves to curl and drop early.',
    //         'disease_id' => 1, 
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //      DB::table('solutions')->insert([
    //         'title' => 'Fungicide Application',
    //         'description' => 'At the first sign of infection, remove and dispose of infected leaves to prevent the spread of rust spores. Do not compost these leaves, as the spores can survive and re-infect plants. Apply protective fungicides like captan, mancozeb, or myclobutanil during the growing season, especially in early spring.',
    //         'disease_id' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     DB::table('home_remedies')->insert([
    //         'title' => 'Neem Oil Spray',
    //         'description' => 'Spraying diluted neem oil can help suppress fungal infections naturally.',
    //         'disease_id' => 1, 
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);


    //      DB::table('preventions')->insert([
    //         'title' => 'Clean Orchard Floor',
    //         'description' => 'Always remove fallen leaves and fruit to reduce the source of infection.',
    //         'disease_id' => 1, 
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    // }

    public function run(): void
    {
        $diseases = [
            [
                'name' => 'Apple___Black_rot',
                'origin_name' => 'Black Rot',
                'scientific_name' => 'Botryosphaeria obtusa',
                'also_know_as' => json_encode(['Black Rot', 'Frogeye Leaf Spot']),
                'type_disease' => 'Fungal disease',
                'description' => 'Black rot is a fungal disease affecting apple trees, causing dark lesions on leaves, fruit, and twigs, leading to fruit rot and reduced yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Circular, dark brown to black spots on leaves, often called frogeye leaf spot, causing leaf yellowing.',
                    ],
                    [
                        'title' => 'Fruit Rot',
                        'description' => 'Black, sunken lesions on fruit, leading to mummification and premature drop.',
                    ],
                    [
                        'title' => 'Twig Cankers',
                        'description' => 'Dark, shriveled cankers on twigs, reducing tree vigor.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply fungicides like captan or myclobutanil during bloom and fruit development.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove and destroy infected fruit and twigs to reduce fungal spores.',
                    ],
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune infected branches to improve air circulation and reduce disease spread.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Baking Soda Spray',
                        'description' => 'Mix 1 tbsp baking soda with 1 gallon water and a few drops of soap; spray weekly.',
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Apply diluted neem oil to suppress fungal growth on leaves and fruit.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Orchard Sanitation',
                        'description' => 'Clear fallen leaves and fruit to eliminate fungal overwintering sites.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant apple cultivars resistant to black rot, such as Enterprise.',
                    ],
                    [
                        'title' => 'Proper Spacing',
                        'description' => 'Space trees to improve airflow and reduce humidity.',
                    ],
                ],
            ],
            [
                'name' => 'Apple___Cedar_apple_rust',
                'origin_name' => 'Cedar Apple Rust',
                'scientific_name' => 'Gymnosporangium juniperi-virginianae',
                'also_know_as' => json_encode(['Cedar Apple Rust']),
                'type_disease' => 'Fungal disease',
                'description' => 'Cedar apple rust alternates between apple and cedar trees, causing yellow-orange spots on apple leaves and fruit.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Bright yellow-orange spots with black pycnidia on leaves, causing defoliation.',
                    ],
                    [
                        'title' => 'Fruit Lesions',
                        'description' => 'Orange spots on fruit, reducing marketability.',
                    ],
                    [
                        'title' => 'Cedar Galls',
                        'description' => 'Galls on nearby cedar trees release spores in wet spring weather.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply myclobutanil or sulfur-based fungicides from pink bud to petal fall.',
                    ],
                    [
                        'title' => 'Cedar Removal',
                        'description' => 'Remove cedar trees within 1–2 miles of apple orchards.',
                    ],
                    [
                        'title' => 'Resistant Cultivars',
                        'description' => 'Plant rust-resistant apple varieties like Freedom or Liberty.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil Spray',
                        'description' => 'Spray diluted neem oil on leaves to reduce fungal infection.',
                    ],
                    [
                        'title' => 'Garlic Extract',
                        'description' => 'Apply garlic extract spray to deter fungal spore germination.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Host Management',
                        'description' => 'Eliminate nearby cedar trees to break the disease cycle.',
                    ],
                    [
                        'title' => 'Timely Pruning',
                        'description' => 'Prune apple trees to enhance airflow and reduce leaf wetness.',
                    ],
                    [
                        'title' => 'Monitor Weather',
                        'description' => 'Apply preventive fungicides during wet spring conditions.',
                    ],
                ],
            ],
            [
                'name' => 'Apple___healthy',
                'origin_name' => 'Healthy Apple',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Apple']),
                'type_disease' => 'None',
                'description' => 'Healthy apple trees show no signs of disease, with vibrant green leaves and quality fruit production.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are uniformly green, with no spots or lesions.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Fruit develops without blemishes, maintaining size and color.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Routine Maintenance',
                        'description' => 'Prune annually, fertilize, and irrigate to maintain vigor.',
                    ],
                    [
                        'title' => 'Pest Monitoring',
                        'description' => 'Regularly check for pests to prevent stress on trees.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost Application',
                        'description' => 'Apply compost to enrich soil and support tree health.',
                    ],
                    [
                        'title' => 'Mulching',
                        'description' => 'Use organic mulch to retain moisture and regulate soil temperature.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Regular Inspections',
                        'description' => 'Monitor trees weekly for early signs of disease or pests.',
                    ],
                    [
                        'title' => 'Balanced Nutrition',
                        'description' => 'Apply balanced fertilizers to prevent nutrient deficiencies.',
                    ],
                ],
            ],
            [
                'name' => 'Blueberry___healthy',
                'origin_name' => 'Healthy Blueberry',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Blueberry']),
                'type_disease' => 'None',
                'description' => 'Healthy blueberry plants exhibit strong growth, green leaves, and high-quality fruit without disease symptoms.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green and vibrant, with no wilting or spots.',
                    ],
                    [
                        'title' => 'Healthy Fruit',
                        'description' => 'Berries are plump, blue, and free of blemishes.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Soil Management',
                        'description' => 'Maintain acidic soil (pH 4.5–5.5) with proper drainage.',
                    ],
                    [
                        'title' => 'Irrigation',
                        'description' => 'Provide consistent watering to avoid drought stress.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Pine Needle Mulch',
                        'description' => 'Apply pine needles to maintain soil acidity and moisture.',
                    ],
                    [
                        'title' => 'Compost Tea',
                        'description' => 'Use compost tea to boost soil microbial activity.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'pH Monitoring',
                        'description' => 'Test soil pH annually to ensure optimal conditions.',
                    ],
                    [
                        'title' => 'Pest Control',
                        'description' => 'Use netting to protect berries from birds and insects.',
                    ],
                ],
            ],
            [
                'name' => 'Cherry_(including_sour)_healthy',
                'origin_name' => 'Healthy Cherry',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Cherry']),
                'type_disease' => 'None',
                'description' => 'Healthy cherry trees, including sour varieties, have robust foliage and produce quality fruit without disease.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Fruit is firm, colorful, and free of lesions.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune annually to maintain tree structure and health.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizer in spring to support growth.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Organic Mulch',
                        'description' => 'Apply wood chip mulch to retain soil moisture.',
                    ],
                    [
                        'title' => 'Compost',
                        'description' => 'Add compost to improve soil fertility.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Regular Monitoring',
                        'description' => 'Inspect trees for pests and diseases regularly.',
                    ],
                    [
                        'title' => 'Proper Watering',
                        'description' => 'Avoid overwatering to prevent root rot.',
                    ],
                ],
            ],
            [
                'name' => 'Cherry_(including_sour)_Powdery_mildew',
                'origin_name' => 'Powdery Mildew',
                'scientific_name' => 'Podosphaera clandestina',
                'also_know_as' => json_encode(['Powdery Mildew']),
                'type_disease' => 'Fungal disease',
                'description' => 'Powdery mildew affects cherry trees, causing white powdery patches on leaves and shoots, reducing photosynthesis and fruit quality.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Coating',
                        'description' => 'White powdery coating on leaves, causing distortion.',
                    ],
                    [
                        'title' => 'Shoot Damage',
                        'description' => 'Powdery growth on young shoots, stunting growth.',
                    ],
                    [
                        'title' => 'Fruit Spots',
                        'description' => 'White patches on fruit, reducing marketability.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply sulfur or potassium bicarbonate-based fungicides.',
                    ],
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune to improve air circulation and reduce humidity.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected plant debris to reduce fungal spores.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Milk Spray',
                        'description' => 'Mix 1 part milk with 9 parts water; spray weekly.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Spray a baking soda solution (1 tbsp per gallon) to suppress mildew.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Air Circulation',
                        'description' => 'Space trees and prune to reduce leaf wetness.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant mildew-resistant cherry cultivars.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                ],
            ],
            [
                'name' => 'Corn_(maize)_Cercospora_leaf_spot',
                'origin_name' => 'Cercospora Leaf Spot',
                'scientific_name' => 'Cercospora zeae-maydis',
                'also_know_as' => json_encode(['Cercospora Leaf Spot', 'Gray Leaf Spot']),
                'type_disease' => 'Fungal disease',
                'description' => 'Cercospora leaf spot causes grayish-white lesions on maize leaves, reducing photosynthesis and yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Lesions',
                        'description' => 'Rectangular, grayish-white lesions with distinct borders.',
                    ],
                    [
                        'title' => 'Leaf Yellowing',
                        'description' => 'Yellowing around lesions, leading to premature leaf death.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply azoxystrobin or pyraclostrobin during early infection.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-host crops to reduce fungal inoculum.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray diluted neem oil to suppress fungal growth.',
                    ],
                    [
                        'title' => 'Garlic Extract',
                        'description' => 'Apply garlic extract to reduce fungal spread.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Resistant Hybrids',
                        'description' => 'Plant maize hybrids resistant to gray leaf spot.',
                    ],
                    [
                        'title' => 'Tillage',
                        'description' => 'Bury crop residue to reduce fungal spores.',
                    ],
                ],
            ],
            [
                'name' => 'Corn_(maize)_Common_rust',
                'origin_name' => 'Common Rust',
                'scientific_name' => 'Puccinia sorghi',
                'also_know_as' => json_encode(['Common Rust']),
                'type_disease' => 'Fungal disease',
                'description' => 'Common rust affects maize, forming orange-brown pustules on leaves, reducing photosynthesis.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Pustules',
                        'description' => 'Orange-brown pustules scattered across leaves.',
                    ],
                    [
                        'title' => 'Leaf Necrosis',
                        'description' => 'Darkening and death of leaf tissue around pustules.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply mancozeb or triazole-based fungicides early.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant rust-resistant maize hybrids.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Garlic Spray',
                        'description' => 'Spray garlic extract to deter fungal spread.',
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Apply neem oil to reduce rust progression.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Early Planting',
                        'description' => 'Plant early to avoid peak rust infection periods.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-host crops to reduce spore buildup.',
                    ],
                ],
            ],
            [
                'name' => 'Corn_(maize)_healthy',
                'origin_name' => 'Healthy Corn',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Corn']),
                'type_disease' => 'None',
                'description' => 'Healthy corn plants display strong stalks, green leaves, and high-quality grain production.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Growth',
                        'description' => 'Stalks are sturdy, and grain develops normally.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Irrigation',
                        'description' => 'Provide consistent watering during key growth stages.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply nitrogen and phosphorus fertilizers as needed.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost',
                        'description' => 'Apply compost to enrich soil fertility.',
                    ],
                    [
                        'title' => 'Manure',
                        'description' => 'Use well-rotted manure to boost nutrient levels.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Weed Control',
                        'description' => 'Remove weeds to reduce competition and disease hosts.',
                    ],
                    [
                        'title' => 'Field Monitoring',
                        'description' => 'Inspect fields regularly for pests and diseases.',
                    ],
                ],
            ],
            [
                'name' => 'Corn_(maize)_Northern_Leaf_Blight',
                'origin_name' => 'Northern Leaf Blight',
                'scientific_name' => 'Exserohilum turcicum',
                'also_know_as' => json_encode(['Northern Leaf Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Northern leaf blight causes long, grayish-green lesions on maize leaves, reducing yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Lesions',
                        'description' => 'Cigar-shaped, grayish-green to tan lesions on leaves.',
                    ],
                    [
                        'title' => 'Leaf Dieback',
                        'description' => 'Premature leaf death, reducing photosynthesis.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or azoxystrobin early in infection.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-host crops to reduce fungal inoculum.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray diluted neem oil to suppress fungal growth.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to reduce fungal spread.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Resistant Hybrids',
                        'description' => 'Plant maize hybrids resistant to northern leaf blight.',
                    ],
                    [
                        'title' => 'Tillage',
                        'description' => 'Bury crop residue to reduce fungal spores.',
                    ],
                ],
            ],
            [
                'name' => 'Grape___Black_rot',
                'origin_name' => 'Black Rot',
                'scientific_name' => 'Guignardia bidwellii',
                'also_know_as' => json_encode(['Black Rot']),
                'type_disease' => 'Fungal disease',
                'description' => 'Black rot affects grapes, causing dark spots on leaves and fruit, leading to fruit rot.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Brown to black spots with yellow halos on leaves.',
                    ],
                    [
                        'title' => 'Fruit Rot',
                        'description' => 'Black, shriveled berries with pycnidia.',
                    ],
                    [
                        'title' => 'Shoot Lesions',
                        'description' => 'Dark lesions on young shoots, reducing growth.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply myclobutanil or captan from bud break to veraison.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove mummified berries and infected debris.',
                    ],
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune to improve air circulation and reduce humidity.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Baking Soda Spray',
                        'description' => 'Spray baking soda solution to suppress fungal growth.',
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Apply neem oil to reduce fungal spread.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Sanitation',
                        'description' => 'Clear vineyard of infected debris annually.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant black rot-resistant grape cultivars.',
                    ],
                    [
                        'title' => 'Canopy Management',
                        'description' => 'Train vines to improve airflow and reduce wetness.',
                    ],
                ],
            ],
            [
                'name' => 'Grape__Esca(Black_Measles)',
                'origin_name' => 'Esca (Black Measles)',
                'scientific_name' => 'Phaeomoniella chlamydospora',
                'also_know_as' => json_encode(['Black Measles', 'Esca']),
                'type_disease' => 'Fungal disease',
                'description' => 'Esca causes dark streaks in grapevine wood and spots on berries, reducing vine vigor.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Symptoms',
                        'description' => 'Tiger-striped leaves with yellow and brown discoloration.',
                    ],
                    [
                        'title' => 'Berry Spots',
                        'description' => 'Dark, measles-like spots on berries, reducing quality.',
                    ],
                    [
                        'title' => 'Wood Discoloration',
                        'description' => 'Dark streaks or decay in vine wood, weakening structure.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Surgical Removal',
                        'description' => 'Cut out infected wood and retrain vines.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove and destroy infected plant parts.',
                    ],
                    [
                        'title' => 'Fungicide Trials',
                        'description' => 'Apply experimental fungicides like fosetyl-Al (limited efficacy).',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Vinegar Spray',
                        'description' => 'Apply diluted vinegar to slow fungal progression.',
                    ],
                    [
                        'title' => 'Garlic Extract',
                        'description' => 'Spray garlic extract to deter fungal spread.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Proper Pruning',
                        'description' => 'Avoid pruning in wet conditions to reduce fungal entry.',
                    ],
                    [
                        'title' => 'Vineyard Hygiene',
                        'description' => 'Remove dead wood and debris from vineyards.',
                    ],
                    [
                        'title' => 'Stress Reduction',
                        'description' => 'Ensure proper irrigation to minimize vine stress.',
                    ],
                ],
            ],
            [
                'name' => 'Grape___healthy',
                'origin_name' => 'Healthy Grape',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Grape']),
                'type_disease' => 'None',
                'description' => 'Healthy grapevines exhibit robust growth, green leaves, and high-quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Berries are plump and free of blemishes.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Canopy Management',
                        'description' => 'Train and prune vines for optimal growth.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizers to support vine health.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Organic Mulch',
                        'description' => 'Apply mulch to retain soil moisture.',
                    ],
                    [
                        'title' => 'Compost',
                        'description' => 'Use compost to improve soil fertility.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Regular Monitoring',
                        'description' => 'Inspect vines for early signs of disease.',
                    ],
                    [
                        'title' => 'Proper Watering',
                        'description' => 'Avoid overwatering to prevent root issues.',
                    ],
                ],
            ],
            [
                'name' => 'Grape__Leaf_blight(Isariopsis_Leaf_Spot)',
                'origin_name' => 'Leaf Blight (Isariopsis Leaf Spot)',
                'scientific_name' => 'Pseudocercospora vitis',
                'also_know_as' => json_encode(['Isariopsis Leaf Spot', 'Leaf Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Leaf blight causes dark spots on grape leaves, reducing photosynthesis.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Irregular, dark brown to black spots with yellow halos.',
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature leaf fall, reducing vine vigor.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply sulfur or captan during leaf development.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected leaves to reduce fungal spores.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to control fungal spread.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress fungus.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Air Circulation',
                        'description' => 'Prune vines to enhance airflow.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep leaves dry.',
                    ],
                ],
            ],
            [
                'name' => 'Not_plant',
                'origin_name' => 'Not a Plant',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Not a Plant']),
                'type_disease' => 'None',
                'description' => 'Indicates a non-plant entity or identification error.',
                'symptoms' => [
                    [
                        'title' => 'No Plant Symptoms',
                        'description' => 'No plant-related symptoms applicable.',
                    ],
                    [
                        'title' => 'Identification Error',
                        'description' => 'Input does not correspond to a plant.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'No Action',
                        'description' => 'No treatment required for non-plant entities.',
                    ],
                    [
                        'title' => 'Verify Input',
                        'description' => 'Confirm correct plant identification.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'No Remedies',
                        'description' => 'Not applicable for non-plant entities.',
                    ],
                    [
                        'title' => 'Reassess',
                        'description' => 'Reevaluate input for accuracy.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Accurate Identification',
                        'description' => 'Ensure proper plant identification.',
                    ],
                    [
                        'title' => 'Data Validation',
                        'description' => 'Validate input data before processing.',
                    ],
                ],
            ],
            [
                'name' => 'Orange__Haunglongbing(Citrus_greening)',
                'origin_name' => 'Huanglongbing (Citrus Greening)',
                'scientific_name' => 'Candidatus Liberibacter asiaticus',
                'also_know_as' => json_encode(['Citrus Greening', 'Huanglongbing']),
                'type_disease' => 'Bacterial disease',
                'description' => 'Huanglongbing causes yellowing leaves, bitter fruit, and tree decline in citrus.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Mottling',
                        'description' => 'Blotchy, yellow mottling on leaves, resembling nutrient deficiency.',
                    ],
                    [
                        'title' => 'Fruit Symptoms',
                        'description' => 'Small, misshapen, bitter fruit with uneven coloring.',
                    ],
                    [
                        'title' => 'Tree Decline',
                        'description' => 'Stunted growth and branch dieback, leading to tree death.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Insecticide Application',
                        'description' => 'Use imidacloprid to control psyllid vectors.',
                    ],
                    [
                        'title' => 'Tree Removal',
                        'description' => 'Remove and destroy infected trees to prevent spread.',
                    ],
                    [
                        'title' => 'Nutritional Support',
                        'description' => 'Apply foliar micronutrients to prolong tree productivity.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Micronutrient Spray',
                        'description' => 'Spray zinc and manganese to reduce symptom severity.',
                    ],
                    [
                        'title' => 'Soap Spray',
                        'description' => 'Use insecticidal soap to control psyllids.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Psyllid Control',
                        'description' => 'Monitor and control Asian citrus psyllid populations.',
                    ],
                    [
                        'title' => 'Certified Stock',
                        'description' => 'Plant disease-free nursery stock.',
                    ],
                    [
                        'title' => 'Quarantine Measures',
                        'description' => 'Restrict movement of citrus plants to prevent spread.',
                    ],
                ],
            ],
            [
                'name' => 'Peach___Bacterial_spot',
                'origin_name' => 'Bacterial Spot',
                'scientific_name' => 'Xanthomonas arboricola pv. pruni',
                'also_know_as' => json_encode(['Bacterial Spot']),
                'type_disease' => 'Bacterial disease',
                'description' => 'Bacterial spot causes dark lesions on peach leaves and fruit, reducing quality.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Water-soaked spots turning dark brown with yellow halos.',
                    ],
                    [
                        'title' => 'Fruit Lesions',
                        'description' => 'Dark, sunken spots on fruit, causing cracking.',
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature leaf fall, reducing tree vigor.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Bactericide Application',
                        'description' => 'Apply copper-based bactericides or oxytetracycline early.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant resistant peach cultivars like Clayton.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris to reduce bacterial spread.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Garlic Spray',
                        'description' => 'Spray garlic extract to reduce bacterial growth.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress bacteria.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune to improve air circulation.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Avoid planting peaches in infected fields.',
                    ],
                ],
            ],
            [
                'name' => 'Peach___healthy',
                'origin_name' => 'Healthy Peach',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Peach']),
                'type_disease' => 'None',
                'description' => 'Healthy peach trees show vibrant foliage and high-quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or lesions.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Fruit is firm, colorful, and blemish-free.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune annually to maintain tree health.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizer in spring.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Mulch',
                        'description' => 'Apply organic mulch to retain moisture.',
                    ],
                    [
                        'title' => 'Compost',
                        'description' => 'Use compost to enrich soil.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect trees regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Proper Watering',
                        'description' => 'Avoid overwatering to prevent root issues.',
                    ],
                ],
            ],
            [
                'name' => 'Pepper,bell__Bacterial_spot',
                'origin_name' => 'Bacterial Spot',
                'scientific_name' => 'Xanthomonas campestris pv. vesicatoria',
                'also_know_as' => json_encode(['Bacterial Spot']),
                'type_disease' => 'Bacterial disease',
                'description' => 'Bacterial spot affects bell peppers, causing dark spots on leaves and fruit.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Water-soaked spots turning dark with yellow halos.',
                    ],
                    [
                        'title' => 'Fruit Spots',
                        'description' => 'Dark, raised spots on fruit, reducing marketability.',
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature leaf fall, reducing yield.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Bactericide Application',
                        'description' => 'Apply copper-based bactericides early in season.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected plant debris.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Baking Soda Spray',
                        'description' => 'Spray baking soda solution to reduce bacteria.',
                    ],
                    [
                        'title' => 'Garlic Extract',
                        'description' => 'Apply garlic extract to suppress bacterial growth.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant bacterial spot-resistant pepper cultivars.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                    [
                        'title' => 'Seed Treatment',
                        'description' => 'Use hot water-treated seeds to eliminate bacteria.',
                    ],
                ],
            ],
            [
                'name' => 'Pepper,bell__healthy',
                'origin_name' => 'Healthy Bell Pepper',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Bell Pepper']),
                'type_disease' => 'None',
                'description' => 'Healthy bell pepper plants exhibit strong growth and quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Peppers are firm, colorful, and blemish-free.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Irrigation',
                        'description' => 'Provide consistent watering.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizer during growth.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost Tea',
                        'description' => 'Apply compost tea to boost soil health.',
                    ],
                    [
                        'title' => 'Mulch',
                        'description' => 'Use straw mulch to retain moisture.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect plants regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Weed Control',
                        'description' => 'Remove weeds to reduce competition.',
                    ],
                ],
            ],
            [
                'name' => 'Potato___Early_blight',
                'origin_name' => 'Early Blight',
                'scientific_name' => 'Alternaria solani',
                'also_know_as' => json_encode(['Early Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Early blight causes dark, concentric spots on potato leaves, reducing yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Dark brown spots with concentric rings on lower leaves.',
                    ],
                    [
                        'title' => 'Tuber Lesions',
                        'description' => 'Dark, sunken lesions on tubers, reducing quality.',
                    ],
                    [
                        'title' => 'Leaf Yellowing',
                        'description' => 'Yellowing and premature leaf drop.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or mancozeb regularly.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris to reduce spores.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to reduce fungal spread.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress fungus.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant early blight-resistant potato cultivars.',
                    ],
                    [
                        'title' => 'Proper Spacing',
                        'description' => 'Space plants to improve air circulation.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                ],
            ],
            [
                'name' => 'Potato___healthy',
                'origin_name' => 'Healthy Potato',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Potato']),
                'type_disease' => 'None',
                'description' => 'Healthy potato plants show robust foliage and quality tubers.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Tubers',
                        'description' => 'Tubers are firm and free of blemishes.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Hilling',
                        'description' => 'Hill soil around plants to protect tubers.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizer during growth.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost',
                        'description' => 'Apply compost to enrich soil.',
                    ],
                    [
                        'title' => 'Manure',
                        'description' => 'Use well-rotted manure for nutrients.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect plants regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                ],
            ],
            [
                'name' => 'Potato___late_blight',
                'origin_name' => 'Late Blight',
                'scientific_name' => 'Phytophthora infestans',
                'also_know_as' => json_encode(['Late Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Late blight causes dark lesions on potato leaves and tubers, leading to crop loss.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Lesions',
                        'description' => 'Dark, water-soaked spots with white mold.',
                    ],
                    [
                        'title' => 'Tuber Rot',
                        'description' => 'Brown, rotten tubers with granular texture.',
                    ],
                    [
                        'title' => 'Stem Lesions',
                        'description' => 'Dark lesions on stems, causing collapse.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or metalaxyl in wet conditions.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris and volunteer plants.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant late blight-resistant cultivars.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Copper Spray',
                        'description' => 'Use Bordeaux mixture to control fungal spread.',
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to reduce fungal growth.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Avoid Wet Conditions',
                        'description' => 'Avoid overhead watering and improve drainage.',
                    ],
                    [
                        'title' => 'Certified Seed',
                        'description' => 'Use certified disease-free seed potatoes.',
                    ],
                ],
            ],
            [
                'name' => 'Raspberry___healthy',
                'origin_name' => 'Healthy Raspberry',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Raspberry']),
                'type_disease' => 'None',
                'description' => 'Healthy raspberry plants exhibit strong canes and quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Berries are firm, colorful, and blemish-free.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Pruning',
                        'description' => 'Prune canes annually to maintain health.',
                    ],
                    [
                        'title' => 'Irrigation',
                        'description' => 'Provide consistent watering.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Mulch',
                        'description' => 'Apply straw mulch to retain moisture.',
                    ],
                    [
                        'title' => 'Compost',
                        'description' => 'Use compost to enrich soil.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect plants regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Proper Spacing',
                        'description' => 'Space plants to improve air circulation.',
                    ],
                ],
            ],
            [
                'name' => 'Soybean___healthy',
                'origin_name' => 'Healthy Soybean',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Soybean']),
                'type_disease' => 'None',
                'description' => 'Healthy soybean plants show robust growth and quality seeds.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Pods',
                        'description' => 'Pods are full and free of blemishes.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply nitrogen-fixing inoculants and fertilizers.',
                    ],
                    [
                        'title' => 'Weed Control',
                        'description' => 'Remove weeds to reduce competition.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost Tea',
                        'description' => 'Apply compost tea to boost soil health.',
                    ],
                    [
                        'title' => 'Manure',
                        'description' => 'Use well-rotted manure for nutrients.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect fields regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-legume crops.',
                    ],
                ],
            ],
            [
                'name' => 'Squash___Powdery_mildew',
                'origin_name' => 'Powdery Mildew',
                'scientific_name' => 'Erysiphe cichoracearum',
                'also_know_as' => json_encode(['Powdery Mildew']),
                'type_disease' => 'Fungal disease',
                'description' => 'Powdery mildew affects squash, causing white patches on leaves, reducing yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Coating',
                        'description' => 'White powdery spots on upper and lower leaf surfaces.',
                    ],
                    [
                        'title' => 'Leaf Yellowing',
                        'description' => 'Yellowing and premature leaf drop.',
                    ],
                    [
                        'title' => 'Reduced Fruit Quality',
                        'description' => 'Smaller, discolored fruit due to reduced photosynthesis.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply sulfur or potassium bicarbonate early.',
                    ],
                    [
                        'title' => 'Pruning',
                        'description' => 'Remove infected leaves to reduce fungal spread.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant mildew-resistant squash cultivars.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Milk Spray',
                        'description' => 'Mix 1 part milk with 9 parts water; spray weekly.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Spray baking soda solution to suppress mildew.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Air Circulation',
                        'description' => 'Space plants to enhance airflow.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep leaves dry.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-cucurbit crops.',
                    ],
                ],
            ],
            [
                'name' => 'Strawberry___healthy',
                'origin_name' => 'Healthy Strawberry',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Strawberry']),
                'type_disease' => 'None',
                'description' => 'Healthy strawberry plants exhibit vibrant foliage and quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Berries are firm, red, and blemish-free.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Irrigation',
                        'description' => 'Provide consistent watering.',
                    ],
                    [
                        'title' => 'Mulching',
                        'description' => 'Use straw mulch to protect fruit.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost',
                        'description' => 'Apply compost to enrich soil.',
                    ],
                    [
                        'title' => 'Mulch',
                        'description' => 'Use straw mulch to keep fruit clean.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect plants regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Proper Spacing',
                        'description' => 'Space plants to improve air circulation.',
                    ],
                ],
            ],
            [
                'name' => 'Strawberry___Leaf_scorch',
                'origin_name' => 'Leaf Scorch',
                'scientific_name' => 'Diplocarpon earlianum',
                'also_know_as' => json_encode(['Leaf Scorch']),
                'type_disease' => 'Fungal disease',
                'description' => 'Leaf scorch causes dark spots on strawberry leaves, reducing vigor.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Dark purple to brown spots, often merging.',
                    ],
                    [
                        'title' => 'Leaf Scorching',
                        'description' => 'Scorched appearance with dry, dead leaf areas.',
                    ],
                    [
                        'title' => 'Reduced Vigor',
                        'description' => 'Weakened plants with reduced fruit production.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply captan or myclobutanil early.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected leaves and debris.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant leaf scorch-resistant cultivars.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to reduce fungal spread.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress fungus.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Air Circulation',
                        'description' => 'Space plants to enhance airflow.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep leaves dry.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-host crops.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Bacterial_spot',
                'origin_name' => 'Bacterial Spot',
                'scientific_name' => 'Xanthomonas campestris pv. vesicatoria',
                'also_know_as' => json_encode(['Bacterial Spot']),
                'type_disease' => 'Bacterial disease',
                'description' => 'Bacterial spot causes dark spots on tomato leaves and fruit, reducing yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Water-soaked spots turning dark with yellow halos.',
                    ],
                    [
                        'title' => 'Fruit Spots',
                        'description' => 'Dark, raised spots on fruit, reducing quality.',
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature leaf fall, reducing photosynthesis.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Bactericide Application',
                        'description' => 'Apply copper-based bactericides early.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris to reduce bacteria.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Garlic Spray',
                        'description' => 'Spray garlic extract to suppress bacteria.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to reduce bacterial growth.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant bacterial spot-resistant tomato cultivars.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                    [
                        'title' => 'Seed Treatment',
                        'description' => 'Use hot water-treated seeds.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Early_blight',
                'origin_name' => 'Early Blight',
                'scientific_name' => 'Alternaria solani',
                'also_know_as' => json_encode(['Early Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Early blight causes dark, concentric spots on tomato leaves, reducing yield.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Dark brown spots with concentric rings on lower leaves.',
                    ],
                    [
                        'title' => 'Stem Lesions',
                        'description' => 'Dark lesions on stems, weakening plants.',
                    ],
                    [
                        'title' => 'Fruit Rot',
                        'description' => 'Dark, sunken spots near fruit stems.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or mancozeb regularly.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris to reduce spores.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to reduce fungal spread.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress fungus.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Proper Spacing',
                        'description' => 'Space plants to improve air circulation.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant early blight-resistant cultivars.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___healthy',
                'origin_name' => 'Healthy Tomato',
                'scientific_name' => 'None',
                'also_know_as' => json_encode(['Healthy Tomato']),
                'type_disease' => 'None',
                'description' => 'Healthy tomato plants exhibit robust growth and quality fruit.',
                'symptoms' => [
                    [
                        'title' => 'No Disease Symptoms',
                        'description' => 'Leaves are green, with no spots or wilting.',
                    ],
                    [
                        'title' => 'Normal Fruit',
                        'description' => 'Tomatoes are firm, colorful, and blemish-free.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Staking',
                        'description' => 'Stake plants to improve air circulation.',
                    ],
                    [
                        'title' => 'Fertilization',
                        'description' => 'Apply balanced fertilizer during growth.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Compost Tea',
                        'description' => 'Apply compost tea to boost soil health.',
                    ],
                    [
                        'title' => 'Mulch',
                        'description' => 'Use straw mulch to retain moisture.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Monitoring',
                        'description' => 'Inspect plants regularly for pests and diseases.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Late_blight',
                'origin_name' => 'Late Blight',
                'scientific_name' => 'Phytophthora infestans',
                'also_know_as' => json_encode(['Late Blight']),
                'type_disease' => 'Fungal disease',
                'description' => 'Late blight causes dark lesions on tomato leaves and fruit, causing crop loss.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Lesions',
                        'description' => 'Dark, water-soaked spots with white mold.',
                    ],
                    [
                        'title' => 'Fruit Rot',
                        'description' => 'Dark, greasy spots on fruit, causing rot.',
                    ],
                    [
                        'title' => 'Stem Lesions',
                        'description' => 'Dark lesions on stems, leading to collapse.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or metalaxyl.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected debris and plants.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant late blight-resistant cultivars.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Copper Spray',
                        'description' => 'Use Bordeaux mixture to control fungi.',
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Spray neem oil to reduce fungal spread.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Avoid Wet Conditions',
                        'description' => 'Use drip irrigation and improve drainage.',
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops.',
                    ],
                    [
                        'title' => 'Certified Seed',
                        'description' => 'Use disease-free seeds or transplants.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Leaf_Mold',
                'origin_name' => 'Leaf Mold',
                'scientific_name' => 'Passalora fulva',
                'also_know_as' => json_encode(['Leaf Mold']),
                'type_disease' => 'Fungal disease',
                'description' => 'Leaf mold causes yellow spots and mold on tomato leaves, reducing photosynthesis.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Yellow spots on upper leaf surfaces.',
                    ],
                    [
                        'title' => 'Mold Growth',
                        'description' => 'Grayish-purple mold on leaf undersides.',
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature leaf fall, reducing yield.',
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply chlorothalonil or copper-based fungicides.',
                    ],
                    [
                        'title' => 'Ventilation',
                        'description' => 'Increase air circulation in greenhouses.',
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove infected leaves and debris.',
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Milk Spray',
                        'description' => 'Mix 1 part milk with 9 parts water; spray weekly.',
                    ],
                    [
                        'title' => 'Baking Soda',
                        'description' => 'Apply baking soda solution to suppress mold.',
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Reduce Humidity',
                        'description' => 'Use fans or vents in greenhouses.',
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep leaves dry.',
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant leaf mold-resistant cultivars.',
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Septoria_leaf_spot',
                'origin_name' => 'Septoria Leaf Spot',
                'scientific_name' => 'Septoria lycopersici',
                'also_know_as' => json_encode(['Septoria Leaf Spot']),
                'type_disease' => 'Fungal disease',
                'description' => 'Septoria leaf spot causes small, water-soaked spots on tomato leaves, leading to defoliation.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Small, grayish-white spots with dark margins and yellow halos on lower leaves.'
                    ],
                    [
                        'title' => 'Leaf Yellowing',
                        'description' => 'Yellowing of leaves around spots, leading to premature leaf drop.'
                    ],
                    [
                        'title' => 'Reduced Photosynthesis',
                        'description' => 'Defoliation reduces plant vigor and fruit yield.'
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply fungicides like chlorothalonil or mancozeb at the first sign of disease.'
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate tomatoes with non-solanaceous crops to reduce fungal spores in soil.'
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove and destroy infected leaves and debris to prevent spore spread.'
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil Spray',
                        'description' => 'Apply diluted neem oil to suppress fungal growth on leaves.'
                    ],
                    [
                        'title' => 'Baking Soda Solution',
                        'description' => 'Mix 1 tablespoon baking soda with water and spray to reduce fungal spread.'
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Proper Plant Spacing',
                        'description' => 'Space plants to improve air circulation and reduce leaf wetness.'
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep foliage dry and minimize fungal infection.'
                    ],
                    [
                        'title' => 'Stake Plants',
                        'description' => 'Stake or cage tomatoes to keep leaves off the ground and reduce disease.'
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Spider_mites_Two-spotted_spider_mite',
                'origin_name' => 'Two-Spotted Spider Mite',
                'scientific_name' => 'Tetranychus urticae',
                'also_know_as' => json_encode(['Two-Spotted Spider Mite']),
                'type_disease' => 'Pest infestation',
                'description' => 'Two-spotted spider mites cause stippling and yellowing of tomato leaves, reducing plant vigor.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Stippling',
                        'description' => 'Fine yellow stippling or speckling on leaves due to mite feeding.'
                    ],
                    [
                        'title' => 'Webbing',
                        'description' => 'Fine silk webbing on leaf undersides, indicating heavy mite infestation.'
                    ],
                    [
                        'title' => 'Leaf Yellowing',
                        'description' => 'Leaves turn yellow or bronze, potentially dropping prematurely.'
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Miticide Application',
                        'description' => 'Apply miticides like abamectin or insecticidal soap to control mite populations.'
                    ],
                    [
                        'title' => 'Biological Control',
                        'description' => 'Introduce predatory mites like Phytoseiulus persimilis to reduce mite numbers.'
                    ],
                    [
                        'title' => 'Water Spray',
                        'description' => 'Use a strong water jet to dislodge mites from leaves.'
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Soap Spray',
                        'description' => 'Mix mild dish soap with water and spray to suffocate mites.'
                    ],
                    [
                        'title' => 'Garlic Oil Spray',
                        'description' => 'Apply garlic oil spray to repel mites and reduce infestation.'
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Maintain Humidity',
                        'description' => 'Increase humidity around plants, as mites prefer dry conditions.'
                    ],
                    [
                        'title' => 'Regular Monitoring',
                        'description' => 'Check leaf undersides regularly for early signs of mites.'
                    ],
                    [
                        'title' => 'Remove Infested Leaves',
                        'description' => 'Remove and destroy heavily infested leaves to limit spread.'
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Target_Spot',
                'origin_name' => 'Target Spot',
                'scientific_name' => 'Corynespora cassiicola',
                'also_know_as' => json_encode(['Target Spot']),
                'type_disease' => 'Fungal disease',
                'description' => 'Target spot causes dark, concentric spots on tomato leaves and fruit, leading to defoliation.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Spots',
                        'description' => 'Dark brown spots with concentric rings, resembling targets, on leaves.'
                    ],
                    [
                        'title' => 'Fruit Lesions',
                        'description' => 'Small, dark spots on fruit, reducing marketability.'
                    ],
                    [
                        'title' => 'Leaf Drop',
                        'description' => 'Premature defoliation, weakening the plant.'
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Fungicide Application',
                        'description' => 'Apply fungicides like azoxystrobin or chlorothalonil at early onset.'
                    ],
                    [
                        'title' => 'Crop Rotation',
                        'description' => 'Rotate with non-solanaceous crops to reduce fungal buildup.'
                    ],
                    [
                        'title' => 'Sanitation',
                        'description' => 'Remove and destroy infected plant debris.'
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Neem Oil Spray',
                        'description' => 'Spray diluted neem oil to control fungal spread.'
                    ],
                    [
                        'title' => 'Baking Soda Solution',
                        'description' => 'Apply baking soda spray to suppress fungal growth.'
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Improve Air Circulation',
                        'description' => 'Space plants adequately to reduce humidity around foliage.'
                    ],
                    [
                        'title' => 'Avoid Overhead Watering',
                        'description' => 'Use drip irrigation to keep leaves dry.'
                    ],
                    [
                        'title' => 'Prune Lower Leaves',
                        'description' => 'Remove lower leaves to reduce splash-borne spores.'
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Tomato_mosaic_virus',
                'origin_name' => 'Tomato Mosaic Virus',
                'scientific_name' => 'Tomato mosaic virus',
                'also_know_as' => json_encode(['Tomato Mosaic Virus']),
                'type_disease' => 'Viral disease',
                'description' => 'Tomato mosaic virus causes mottling and distortion of tomato leaves, reducing fruit quality.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Mottling',
                        'description' => 'Mosaic-like patterns of light and dark green on leaves.'
                    ],
                    [
                        'title' => 'Leaf Distortion',
                        'description' => 'Leaves become fern-like or distorted, reducing photosynthesis.'
                    ],
                    [
                        'title' => 'Reduced Fruit Quality',
                        'description' => 'Smaller, discolored fruit with uneven ripening.'
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Remove Infected Plants',
                        'description' => 'Remove and destroy infected plants to prevent viral spread.'
                    ],
                    [
                        'title' => 'Sanitize Tools',
                        'description' => 'Disinfect tools with 10% bleach solution after handling plants.'
                    ],
                    [
                        'title' => 'Control Insect Vectors',
                        'description' => 'Manage aphids and other insects that may transmit the virus.'
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Milk Spray',
                        'description' => 'Spray diluted milk to potentially reduce viral transmission.'
                    ],
                    [
                        'title' => 'Hand Washing',
                        'description' => 'Wash hands thoroughly before handling plants to avoid spreading virus.'
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Use Resistant Varieties',
                        'description' => 'Plant tomato varieties resistant to tomato mosaic virus.'
                    ],
                    [
                        'title' => 'Certified Seeds',
                        'description' => 'Use virus-free certified seeds or transplants.'
                    ],
                    [
                        'title' => 'Avoid Smoking',
                        'description' => 'Avoid tobacco use near plants, as the virus can spread via tobacco.'
                    ],
                ],
            ],
            [
                'name' => 'Tomato___Tomato_Yellow_Leaf_Curl_Virus',
                'origin_name' => 'Tomato Yellow Leaf Curl Virus',
                'scientific_name' => 'Tomato yellow leaf curl virus',
                'also_know_as' => json_encode(['Tomato Yellow Leaf Curl Virus']),
                'type_disease' => 'Viral disease',
                'description' => 'Tomato yellow leaf curl virus causes yellowing and curling of leaves, stunting growth.',
                'symptoms' => [
                    [
                        'title' => 'Leaf Curling',
                        'description' => 'Upward curling and yellowing of leaves, reducing leaf size.'
                    ],
                    [
                        'title' => 'Stunted Growth',
                        'description' => 'Plants become stunted with reduced fruit production.'
                    ],
                    [
                        'title' => 'Flower Drop',
                        'description' => 'Premature flower drop, leading to low yield.'
                    ],
                ],
                'solutions' => [
                    [
                        'title' => 'Insecticide Application',
                        'description' => 'Use imidacloprid to control whitefly vectors.'
                    ],
                    [
                        'title' => 'Remove Infected Plants',
                        'description' => 'Remove and destroy infected plants to limit spread.'
                    ],
                    [
                        'title' => 'Reflective Mulch',
                        'description' => 'Use silver mulch to repel whiteflies.'
                    ],
                ],
                'home_remedies' => [
                    [
                        'title' => 'Soap Spray',
                        'description' => 'Spray insecticidal soap to control whitefly populations.'
                    ],
                    [
                        'title' => 'Neem Oil',
                        'description' => 'Apply neem oil to deter whiteflies.'
                    ],
                ],
                'preventions' => [
                    [
                        'title' => 'Whitefly Control',
                        'description' => 'Use sticky traps and barriers to reduce whitefly populations.'
                    ],
                    [
                        'title' => 'Resistant Varieties',
                        'description' => 'Plant varieties resistant to TYLCV.'
                    ],
                    [
                        'title' => 'Weed Management',
                        'description' => 'Remove weeds that may host whiteflies.'
                    ],
                ],
            ],
        ];

        foreach ($diseases as $index => $disease) {
            $diseaseId = $index + 1; // Start from ID 2 since Apple Scab is ID 1

            // Insert disease
            DB::table('diseases')->insert([
                'name' => $disease['name'],
                'origin_name' => $disease['origin_name'],
                'scientific_name' => $disease['scientific_name'],
                'also_know_as' => $disease['also_know_as'],
                'type_disease' => $disease['type_disease'],
                'description' => $disease['description'],
                'created_at' => Carbon::parse('2025-03-15 19:23:50'),
                'updated_at' => Carbon::parse('2025-03-15 19:23:50'),
            ]);

               // Insert disease
            DB::table('disease_images')->insert([
                 'image' => '/assets/images/diseases/pota.jpeg',
                'disease_id' => $diseaseId,
                'created_at' => Carbon::parse('2025-03-15 19:23:50'),
                'updated_at' => Carbon::parse('2025-03-15 19:23:50'),
            ]);

            // Insert symptoms
            foreach ($disease['symptoms'] as $symptom) {
                DB::table('symptoms')->insert([
                    'title' => $symptom['title'],
                    'description' => $symptom['description'],
                    'disease_id' => $diseaseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Insert solutions
            foreach ($disease['solutions'] as $solution) {
                DB::table('solutions')->insert([
                    'title' => $solution['title'],
                    'description' => $solution['description'],
                    'disease_id' => $diseaseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Insert home remedies
            foreach ($disease['home_remedies'] as $remedy) {
                DB::table('home_remedies')->insert([
                    'title' => $remedy['title'],
                    'description' => $remedy['description'],
                    'disease_id' => $diseaseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Insert preventions
            foreach ($disease['preventions'] as $prevention) {
                DB::table('preventions')->insert([
                    'title' => $prevention['title'],
                    'description' => $prevention['description'],
                    'disease_id' => $diseaseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
