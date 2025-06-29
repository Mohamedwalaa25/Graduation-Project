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
        'description' => 'Black rot is a serious fungal disease that primarily affects apple trees, targeting their leaves, fruit, and woody tissues. 
    It is caused by the fungus Botryosphaeria obtusa, which thrives in warm and humid environments commonly found in orchards. 
    Infected fruit develops distinctive black, sunken lesions that often expand over time, eventually leading to complete fruit rot. 
    If left untreated, black rot can cause significant crop loss and reduce overall orchard productivity for several years.',
        'symptoms' => [
            [
                'title' => 'Leaf Spots',
                'description' => 'The earliest visible symptom of black rot is the appearance of small, circular brown spots on leaves. 
    These spots have a characteristic dark purple margin with a lighter brown or tan center, often giving them a target-like appearance. 
    Over time, the center of the lesions turns grayish with tiny black fungal structures known as pycnidia. 
    As the disease progresses, infected leaves may yellow prematurely and fall from the tree, weakening the plant.',
            ],
            [
                'title' => 'Fruit Rot',
                'description' => 'On the fruit, the disease appears as small, slightly sunken, brownish-black spots that slowly expand. 
    These lesions become larger, darker, and may show concentric rings, giving the fruit a bullseye-like appearance. 
    Eventually, infected fruit shrivels and mummifies, often remaining attached to the tree throughout winter. 
    The mummified fruit serves as a major source of fungal spores for reinfection in the following growing season.',
            ],
            [
                'title' => 'Twig Cankers',
                'description' => 'Twig cankers start as small, reddish-brown lesions on young twigs, especially near leaf scars or previous injuries. 
    These cankers slowly enlarge, turning dark brown or black as the fungus destroys bark and underlying tissues. 
    Infected twigs may girdle and die back, leading to reduced tree vigor, stunted growth, and increased susceptibility to other diseases. 
    Cankers provide a persistent source of fungal spores, making management of infected twigs crucial for disease control.',
            ],
        ],
        'solutions' => [
            [
                'title' => 'Fungicide Application',
                'description' => 'Apply recommended fungicides, such as captan, myclobutanil, or thiophanate-methyl, during key growth stages. 
    Fungicide treatments should begin at the green tip stage and continue regularly until after harvest. 
    Proper coverage of leaves, fruit, and twigs is essential for effective disease management and prevention of new infections. 
    Follow the manufacturer’s guidelines for application rates and intervals to ensure optimal protection against black rot.',
            ],
            [
                'title' => 'Sanitation',
                'description' => 'Effective orchard sanitation plays a key role in controlling black rot outbreaks over time. 
    Regularly collect and destroy fallen leaves, fruit, and pruned twigs that may harbor fungal spores. 
    Mummified fruits should be removed from trees before the next growing season to break the infection cycle. 
    Implementing thorough sanitation measures can significantly reduce the amount of fungal inoculum present in the orchard.',
            ],
            [
                'title' => 'Pruning',
                'description' => 'Prune out all visibly infected branches and twigs, making clean cuts well below the affected areas. 
    Good pruning practices help improve airflow and light penetration within the canopy, creating conditions less favorable to fungal growth. 
    Disinfect pruning tools between cuts using a 10% bleach solution to avoid spreading the disease. 
    Winter or early spring is the best time to perform major pruning, combined with regular maintenance cuts during the growing season.',
            ],
        ],
        'home_remedies' => [
            [
                'title' => 'Baking Soda Spray',
                'description' => 'Prepare a homemade antifungal spray by mixing 1 tablespoon of baking soda with 1 gallon of water. 
    Add a teaspoon of mild liquid soap to help the solution stick to plant surfaces for improved efficacy. 
    Spray the mixture evenly on leaves and fruit every 7 to 10 days, especially during warm, humid conditions favorable to fungal spread. 
    Although not as strong as commercial fungicides, this method can help reduce the spread of fungal spores in mild cases.',
            ],
            [
                'title' => 'Neem Oil',
                'description' => 'Neem oil, extracted from the seeds of the neem tree, is a natural antifungal treatment widely used in organic gardening. 
    Dilute neem oil according to the manufacturer’s instructions and apply it to the affected plant parts, focusing on leaves and fruit. 
    Regular applications form a protective coating that disrupts fungal development and repels insects that may carry fungal spores. 
    Neem oil’s dual-action properties as a fungicide and insecticide make it a valuable tool for holistic disease management.',
            ],
        ],
        'preventions' => [
            [
                'title' => 'Orchard Sanitation',
                'description' => 'Maintaining good sanitation in the orchard is one of the most effective ways to prevent black rot infections. 
    Regularly remove fallen leaves, diseased twigs, and rotting fruit from the orchard floor and surrounding areas. 
    Proper disposal methods, such as burning or deep burial, should be used to prevent fungal spores from recontaminating the soil. 
    A clean orchard reduces fungal overwintering sites, breaking the cycle of infection and helping keep trees healthy.',
            ],
            [
                'title' => 'Resistant Varieties',
                'description' => 'Whenever possible, select apple varieties that have shown natural resistance or tolerance to black rot. 
    Varieties such as Enterprise, Liberty, and Freedom are known to be less susceptible to this particular disease. 
    Choosing resistant varieties reduces the need for chemical treatments and improves the long-term sustainability of the orchard. 
    Consult with local agricultural extension services or nurseries to find suitable resistant cultivars for your growing region.',
            ],
            [
                'title' => 'Proper Spacing',
                'description' => 'Provide adequate spacing between apple trees to ensure good airflow throughout the orchard. 
    Improved air circulation reduces humidity around leaves and fruit, making it more difficult for fungal spores to thrive. 
    Proper spacing also facilitates access for maintenance tasks like pruning, spraying, and harvesting, enhancing overall orchard care. 
    Good planting practices from the beginning can dramatically lower the risk of black rot outbreaks and improve tree vigor.',
            ],
        ],
    ],

            [
    'name' => 'Apple___Cedar_apple_rust',
    'origin_name' => 'Cedar Apple Rust',
    'scientific_name' => 'Gymnosporangium juniperi-virginianae',
    'also_know_as' => json_encode(['Cedar Apple Rust']),
    'type_disease' => 'Fungal disease',
    'description' => 'Cedar apple rust is a fungal disease that alternates between two different hosts: apple trees and certain species of junipers, 
particularly Eastern red cedar. The disease manifests primarily on apple leaves and fruit, where it causes distinctive 
bright orange or yellowish spots that can severely weaken the tree if left untreated. Severe infections can lead to 
early leaf drop, poor fruit quality, and reduced yield for apple orchards situated near infected cedar trees.',
    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'One of the earliest signs of cedar apple rust on apple trees is the appearance of small, bright yellow spots 
on the upper surfaces of the leaves. As the disease progresses, these spots enlarge and develop orange or reddish 
halos around them. Black fungal fruiting structures, called pycnia, often form in the center of the spots. 
Heavily infected trees may experience premature defoliation, weakening overall tree vigor and productivity.',
        ],
        [
            'title' => 'Fruit Lesions',
            'description' => 'The fungus can also infect the developing fruit, resulting in small, slightly raised orange spots on the 
fruit surface. These lesions expand as the fruit matures, often becoming surrounded by a reddish halo or slight cracking. 
Infected fruit becomes unattractive and unmarketable, posing significant problems for commercial apple growers. 
While fruit infections are less common than leaf spots, their presence can dramatically reduce fruit quality.',
        ],
        [
            'title' => 'Cedar Galls',
            'description' => 'Nearby cedar or juniper trees play a crucial role in the lifecycle of cedar apple rust. 
In early spring, infected cedar trees develop round, brown galls that swell and produce bright orange, gelatinous 
horns during rainy periods. These gelatinous structures release fungal spores that are easily carried by the wind 
to nearby apple orchards, beginning the infection cycle all over again on apple trees.',
        ],
    ],
    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Effective control of cedar apple rust in apple orchards requires timely applications of fungicides. 
Fungicides containing myclobutanil, sulfur, or captan are often recommended starting at the pink bud stage 
and continuing through petal fall, with additional applications as needed during extended wet periods. 
Coverage of both upper and lower leaf surfaces is essential to prevent spore germination and infection.',
        ],
        [
            'title' => 'Cedar Removal',
            'description' => 'Since cedar apple rust requires cedar or juniper trees to complete its lifecycle, removing these host plants 
can significantly reduce disease pressure. Ideally, junipers within a radius of 1 to 2 miles of the orchard should be 
removed or replaced with non-host ornamental species. Although complete removal may not always be feasible, 
reducing the number of nearby hosts can dramatically lower the incidence of cedar apple rust infections.',
        ],
        [
            'title' => 'Resistant Cultivars',
            'description' => 'Planting rust-resistant apple varieties is a long-term solution that helps minimize the need for chemical sprays. 
Apple cultivars such as Liberty, Freedom, and Enterprise have demonstrated good resistance to cedar apple rust. 
Using resistant varieties provides growers with greater flexibility in orchard management practices. 
Choosing rust-resistant cultivars is especially important in regions where cedar apple rust pressure is consistently high.',
        ],
    ],
    'home_remedies' => [
        [
            'title' => 'Neem Oil Spray',
            'description' => 'Neem oil can be used as a natural, organic solution to help suppress fungal infections on apple trees. 
Mix neem oil with water according to label directions and spray evenly over leaves and fruit, ensuring thorough coverage. 
Neem works by disrupting fungal spore germination and inhibiting further growth of the disease on the plant surface. 
While not as effective as commercial fungicides, it can help slow disease progression, especially in early stages.',
        ],
        [
            'title' => 'Garlic Extract',
            'description' => 'Garlic extract is another organic remedy believed to have antifungal properties when applied to plant surfaces. 
To prepare, crush several cloves of garlic and steep in hot water, then strain and dilute with additional water for spraying. 
Apply regularly to apple leaves and fruit during the early stages of infection to deter fungal spore germination. 
Garlic extract is a safe, environmentally friendly option for gardeners seeking chemical-free disease control strategies.',
        ],
    ],
    'preventions' => [
        [
            'title' => 'Host Management',
            'description' => 'Proper host management is key to breaking the cedar apple rust lifecycle. 
Whenever possible, eliminate nearby cedar or juniper trees that serve as alternate hosts for the fungus. 
For ornamental landscapes, choose juniper varieties that are resistant to cedar apple rust or consider replacing them entirely. 
Managing host plants not only protects apple orchards but also benefits surrounding properties by reducing spore production.',
        ],
        [
            'title' => 'Timely Pruning',
            'description' => 'Regular pruning of apple trees ensures better airflow throughout the canopy, reducing humidity levels that favor fungal infections. 
Focus on removing crowded, overlapping branches and any dead or diseased limbs that may serve as entry points for pathogens. 
Good pruning practices improve sunlight penetration, enhancing overall tree health and resilience to disease. 
Pruning is most effective when combined with other cultural and chemical control methods for comprehensive protection.',
        ],
        [
            'title' => 'Monitor Weather',
            'description' => 'Weather conditions, particularly wet spring periods, play a significant role in the spread of cedar apple rust spores. 
Stay informed with local weather forecasts and plan fungicide applications accordingly during times of increased disease risk. 
Monitoring weather patterns allows growers to apply preventive treatments before infections take hold. 
Proactive spraying in response to weather events can significantly reduce infection rates and protect future harvests.',
        ],
    ],
],

           [
        'name' => 'Apple___healthy',
        'origin_name' => 'Healthy Apple',
        'scientific_name' => 'None',
        'also_know_as' => json_encode(['Healthy Apple']),
        'type_disease' => 'None',
        'description' => 'Healthy apple trees represent a well-maintained and disease-free condition that reflects good orchard management practices. 
They exhibit strong, upright growth with glossy, deep green leaves that show no signs of spots, discoloration, or wilting. 
Vigorous healthy apple trees produce blossoms in the spring, followed by large, blemish-free fruits during harvest season. 
These trees are typically the result of consistent care, including proper watering, pruning, fertilization, and pest management.',
        'symptoms' => [
            [
                'title' => 'No Disease Symptoms',
                'description' => 'Leaves are consistently green with smooth surfaces, free of any unusual spots, lesions, or signs of pests. 
There are no indications of fungal infections, bacterial growth, or viral deformities affecting foliage or branches. 
The overall appearance of the tree is vibrant and robust, indicating that the plant is receiving all essential nutrients. 
Healthy leaves support maximum photosynthesis, ensuring optimal growth and fruit production throughout the season.',
            ],
            [
                'title' => 'Normal Fruit',
                'description' => 'Healthy apple fruit develops uniformly with bright, consistent coloring depending on the variety. 
The fruit is typically firm to the touch, lacking any blemishes, spots, or distortions that would indicate disease presence. 
Fruits should exhibit proper size, shape, and smooth skin, free from cracking or fungal growths. 
Proper pollination combined with good cultural practices results in abundant harvests of market-quality apples.',
            ],
        ],
        'solutions' => [
            [
                'title' => 'Routine Maintenance',
                'description' => 'Ongoing orchard care is crucial for sustaining healthy growth in apple trees throughout their life cycle. 
This includes regular pruning during dormant seasons to remove weak or overcrowded branches, allowing light and air penetration. 
Providing balanced fertilization tailored to soil conditions ensures that trees have access to the nutrients they need. 
A consistent irrigation schedule during dry periods also helps trees maintain optimal physiological functions.',
            ],
            [
                'title' => 'Pest Monitoring',
                'description' => 'Monitoring for pests is an important preventive measure to ensure long-term apple tree health. 
Regular inspections of leaves, branches, and fruit can reveal early signs of pest activity before infestations become severe. 
If necessary, organic or chemical pest control methods should be applied promptly and according to recommended guidelines. 
Preventing pest problems helps reduce plant stress, making trees more resilient to potential disease threats.',
            ],
        ],
        'home_remedies' => [
            [
                'title' => 'Compost Application',
                'description' => 'Adding compost to the base of the apple tree improves soil structure, nutrient availability, and microbial activity. 
Compost provides organic matter that helps retain moisture while slowly releasing essential nutrients throughout the growing season. 
It promotes the development of a healthy root system, making the tree more drought-tolerant and disease-resistant. 
Using compost consistently is one of the easiest and most effective ways to maintain long-term tree health.',
            ],
            [
                'title' => 'Mulching',
                'description' => 'Applying organic mulch around the base of the apple tree offers multiple benefits for sustaining plant health. 
Mulch helps retain soil moisture, regulates soil temperature, and suppresses the growth of competing weeds. 
As the mulch decomposes, it contributes additional organic matter to the soil, enriching its nutrient content. 
Properly applied mulch should be kept a few inches away from the trunk to prevent rot and pest issues.',
            ],
        ],
        'preventions' => [
            [
                'title' => 'Regular Inspections',
                'description' => 'Frequent inspections of apple trees are essential to catch potential problems before they escalate. 
Inspect for early signs of nutrient deficiencies, pests, or environmental stress factors that may predispose the tree to disease. 
By monitoring foliage, bark, fruit, and the surrounding soil regularly, orchardists can take corrective action proactively. 
Establishing a routine inspection schedule helps maintain a consistently high level of tree health and productivity.',
            ],
            [
                'title' => 'Balanced Nutrition',
                'description' => 'Applying balanced fertilizers tailored to the specific nutrient needs of apple trees ensures robust growth. 
Nutrient management based on periodic soil testing is recommended for adjusting fertilization programs as necessary. 
Balanced nutrition reduces the risk of both deficiencies and toxicities that can negatively affect tree vigor. 
A strong nutritional foundation allows apple trees to better resist pests, environmental stresses, and potential infections.',
            ],
        ],
    ],
            [
    'name' => 'Blueberry___healthy',
    'origin_name' => 'Healthy Blueberry',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Blueberry']),
    'type_disease' => 'None',
    'description' => 'Healthy blueberry plants are recognized by their lush green foliage, upright stems, and consistent, robust growth throughout the season.
They thrive in acidic, well-drained soils with ample organic matter and perform best in full sunlight exposure.
The plant produces abundant blossoms during flowering, which develop into plump, juicy berries with a characteristic waxy coating.
With proper care, these plants remain free from diseases and pests, providing dependable harvests season after season.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy blueberry plants show no signs of disease, with leaves that are uniformly green and vibrant throughout the growing season.
There should be no signs of wilting, discoloration, spotting, or fungal growth on any part of the foliage or stems.
Shoots develop normally, with sturdy stems supporting the weight of future flowers and fruits without bending or breakage.
Plants displaying these characteristics typically remain resilient against common stressors such as drought or nutrient imbalances.',
        ],
        [
            'title' => 'Healthy Fruit',
            'description' => 'Healthy blueberries develop uniformly with deep blue coloration and a fine, natural whitish coating called bloom on their surfaces.
The berries remain plump, juicy, and evenly shaped, free from any blemishes, cracks, or fungal growths that could reduce quality.
Consistent fruit size and high sugar content are signs that the plant is absorbing sufficient water and nutrients.
Healthy plants with these fruiting characteristics are usually productive for many years with proper maintenance.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Soil Management',
            'description' => 'Blueberries require acidic soil with a pH range of 4.5 to 5.5 to absorb nutrients efficiently and support healthy growth.
Adding peat moss, composted pine bark, or sulfur can help maintain and lower soil pH where necessary to suit plant needs.
Good drainage is also essential to prevent root rot, so raised beds or well-drained planting sites are highly recommended.
Conducting soil tests every year ensures that pH remains within the desired range and supports consistent berry production.',
        ],
        [
            'title' => 'Irrigation',
            'description' => 'Regular watering is critical for healthy blueberry production, especially during dry spells or hot summer periods.
Blueberries have shallow roots that dry out quickly, so mulching combined with consistent irrigation prevents drought stress.
Avoid overwatering, as soggy soil can lead to root rot, fungal infections, and nutrient leaching, reducing plant vigor.
A drip irrigation system works best, supplying water directly to the root zone while conserving moisture and preventing disease.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Pine Needle Mulch',
            'description' => 'Applying pine needle mulch around blueberry bushes helps maintain ideal soil acidity while conserving soil moisture.
This mulch creates a natural, protective barrier against weeds and temperature fluctuations around the root zone.
As pine needles break down, they gradually release acidic compounds, contributing to an optimal soil environment for blueberries.
An annual replenishment of mulch ensures sustained acidity, moisture retention, and overall healthier plant growth.',
        ],
        [
            'title' => 'Compost Tea',
            'description' => 'Compost tea is a natural, nutrient-rich liquid that improves both soil fertility and beneficial microbial populations.
It can be made by steeping finished compost in water and aerating it to encourage microbial activity before applying to the soil.
When applied regularly, compost tea enhances plant vigor by supporting nutrient absorption and boosting disease resistance.
Foliar applications can also provide plants with trace nutrients and beneficial organisms to promote sustained health.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'pH Monitoring',
            'description' => 'Testing the soil’s pH on a regular basis ensures that blueberries continue to grow in their preferred acidic environment.
Deviations from the optimal pH range can result in nutrient deficiencies, chlorotic (yellow) leaves, and overall weak growth.
Use sulfur or other acidifying agents to lower soil pH if it rises too high for blueberry plant health and productivity.
Maintaining the correct pH improves not only leaf coloration but also fruit yield and long-term plant performance.',
        ],
        [
            'title' => 'Pest Control',
            'description' => 'Healthy blueberries are susceptible to pests such as birds, aphids, and mites, which can reduce crop quality.
Netting can protect ripening fruit from bird attacks, while insecticidal soap or neem oil may help manage insect pests.
Regular inspections allow early detection of pest problems, making it easier to intervene before serious damage occurs.
Incorporating pest control with good cultural practices like sanitation and mulching ensures sustained plant productivity.',
        ],
    ],
],

            [
            'name' => 'Cherry_(including_sour)_healthy',
            'origin_name' => 'Healthy Cherry',
            'scientific_name' => 'None',
            'also_know_as' => json_encode(['Healthy Cherry']),
            'type_disease' => 'None',
            'description' => 'Healthy cherry trees, including sour and sweet varieties, exhibit lush green foliage and sturdy, upright branches. 
    They bloom abundantly during spring, producing delicate white or pink blossoms that transform into juicy, well-formed cherries. 
    The overall appearance of a healthy cherry tree is vigorous, balanced, and free from visible signs of pests or disease. 
    Good cultural practices such as proper pruning, balanced fertilization, and pest monitoring help maintain this healthy state.',
            'symptoms' => [
                [
                    'title' => 'No Disease Symptoms',
                    'description' => 'Healthy cherry trees show consistent leaf color with smooth, blemish-free surfaces and no signs of yellowing or spots. 
    There are no visible symptoms of fungal growth, pest infestation, or nutrient deficiencies affecting foliage or stems. 
    Bark is smooth and free from cracking, with no signs of cankers or other infections that may compromise tree health. 
    This clean, robust condition indicates the tree is thriving in its environment and properly maintained.',
                ],
                [
                    'title' => 'Normal Fruit',
                    'description' => 'Cherry fruits on healthy trees develop uniformly with firm skins, bright colors, and sweet or tart flavors depending on the variety. 
    Fruits show no evidence of fungal spots, insect holes, or deformities and should detach easily when ripe. 
    Good orchard practices result in consistent annual yields of high-quality cherries suitable for both fresh eating and processing. 
    Healthy fruit production is supported by optimal environmental conditions and attentive care from orchardists.',
                ],
            ],
            'solutions' => [
                [
                    'title' => 'Pruning',
                    'description' => 'Annual pruning is essential for healthy cherry trees, shaping their form and removing damaged or diseased limbs. 
    Open canopies allow for better sunlight penetration and improved airflow, reducing the risk of fungal infections. 
    Pruning encourages the growth of new, productive shoots, supporting both tree health and fruit-bearing potential. 
    Well-maintained tree structure also simplifies harvesting and ongoing orchard management.',
                ],
                [
                    'title' => 'Fertilization',
                    'description' => 'Balanced fertilization programs based on soil testing provide essential nutrients to support vigorous cherry tree growth. 
    Applying fertilizers in early spring before active growth begins helps promote robust foliage and strong blossom development. 
    Avoiding excessive nitrogen fertilization reduces the risk of overly lush growth, which can increase vulnerability to pests. 
    Regularly monitoring tree health and adjusting fertilizer rates ensures long-term productivity and overall vitality.',
                ],
            ],
            'home_remedies' => [
                [
                    'title' => 'Organic Mulch',
                    'description' => 'Applying organic mulch such as straw, wood chips, or shredded leaves helps maintain soil moisture and suppress weeds. 
    As the mulch decomposes, it contributes valuable organic matter to the soil, improving its structure and fertility over time. 
    Mulch also insulates roots from temperature extremes, preventing drought stress during hot or dry periods. 
    Maintain a clear space around the tree trunk to prevent rot and discourage pests from nesting.',
                ],
                [
                    'title' => 'Compost',
                    'description' => 'Incorporating compost into the soil around cherry trees boosts nutrient availability and encourages beneficial soil microbes. 
    Compost enriches soil structure, improving water retention and aeration for healthy root development. 
    Regular compost applications contribute to overall tree vigor, increasing resilience to environmental stress and diseases. 
    Organic compost sources reduce the need for synthetic fertilizers, supporting a more sustainable orchard ecosystem.',
                ],
            ],
            'preventions' => [
                [
                    'title' => 'Regular Monitoring',
                    'description' => 'Conducting frequent inspections of cherry trees helps catch early signs of disease, pests, or nutrient deficiencies. 
    Observing leaves, stems, and developing fruit regularly allows for early intervention before issues escalate. 
    Monitoring also includes checking for signs of stress from drought, poor soil conditions, or physical damage. 
    Early detection and treatment help ensure the continued health and productivity of the tree.',
                ],
                [
                    'title' => 'Proper Watering',
                    'description' => 'Providing consistent and adequate irrigation is vital for sustaining healthy cherry tree growth throughout the season. 
    Avoiding overwatering helps prevent root rot and fungal problems, while sufficient watering during dry periods supports fruit development. 
    Utilize drip irrigation systems or soaker hoses to deliver moisture directly to roots while keeping foliage dry. 
    A stable moisture regime allows trees to maintain balanced nutrient uptake and resist environmental stressors.',
                ],
            ],
        ],
            [
        'name' => 'Cherry_(including_sour)_Powdery_mildew',
        'origin_name' => 'Powdery Mildew',
        'scientific_name' => 'Podosphaera clandestina',
        'also_know_as' => json_encode(['Powdery Mildew']),
        'type_disease' => 'Fungal disease',
        'description' => 'Powdery mildew is a common fungal disease affecting cherry trees, particularly in warm, dry climates with poor airflow. 
It manifests as a white or grayish powdery coating primarily on the surfaces of leaves, shoots, and sometimes developing fruit. 
The fungus interferes with photosynthesis, reducing the overall vigor of the tree and potentially compromising fruit quality. 
Unchecked infections may lead to premature leaf drop, distorted growth, and significantly lower fruit yields.',
        'symptoms' => [
            [
                'title' => 'Leaf Coating',
                'description' => 'White or gray powder-like fungal growth appears on the upper and lower surfaces of leaves, often starting at shoot tips. 
Infected leaves may curl, distort, or become stunted, reducing their capacity for photosynthesis and overall energy production. 
As the disease progresses, severely affected leaves may yellow and drop prematurely from the tree. 
This symptom compromises the tree’s ability to sustain healthy growth and fruit development.',
            ],
            [
                'title' => 'Shoot Damage',
                'description' => 'Powdery mildew also attacks young, tender shoots, covering them with the characteristic powdery fungal layer. 
Affected shoots often exhibit distorted or stunted growth as the fungal infection weakens their cellular structure. 
In severe cases, the infected shoots may die back, leading to further reduction in potential fruit-bearing capacity. 
Regular inspections of new growth are essential to catch and control the infection early.',
            ],
            [
                'title' => 'Fruit Spots',
                'description' => 'Immature cherries may develop irregular whitish or grayish patches of powdery mildew, leading to blemished and deformed fruit. 
Affected fruits often fail to ripen properly or may crack, becoming susceptible to secondary infections by other pathogens. 
Marketability and consumer acceptance of infected fruit are greatly diminished, resulting in economic losses for growers. 
Early detection and control measures can help minimize damage and preserve fruit quality.',
            ],
        ],
        'solutions' => [
            [
                'title' => 'Fungicide Application',
                'description' => 'Applying fungicides specifically formulated for powdery mildew control can effectively manage outbreaks when used properly. 
Sulfur-based or potassium bicarbonate products are commonly used organic treatments, while synthetic fungicides offer broader control. 
Fungicide applications should begin at the first sign of infection and be repeated as recommended by product guidelines. 
Rotating fungicide types helps prevent the development of fungal resistance and improves treatment success.',
            ],
            [
                'title' => 'Pruning',
                'description' => 'Regular pruning of cherry trees opens up the canopy, allowing better airflow and reducing humidity levels around foliage. 
By removing overcrowded branches and infected shoots, pruning minimizes favorable conditions for powdery mildew growth. 
An open canopy also improves sunlight penetration, which further discourages fungal spore development and spread. 
Pruning should be conducted annually during dormancy and selectively during the growing season as needed.',
            ],
            [
                'title' => 'Sanitation',
                'description' => 'Sanitation practices involve removing and destroying all infected leaves, shoots, and fruit to reduce sources of fungal spores. 
Clean pruning tools between cuts using disinfectants to prevent accidental spread of spores during maintenance activities. 
Fallen leaves and pruned branches should be removed from the orchard floor and disposed of properly to prevent reinfection. 
Thorough sanitation reduces fungal inoculum and helps maintain effective disease management throughout the growing season.',
            ],
        ],
        'home_remedies' => [
            [
                'title' => 'Milk Spray',
                'description' => 'A milk solution, typically one part milk to nine parts water, can be sprayed onto leaves to reduce powdery mildew. 
Milk contains natural proteins that, when exposed to sunlight, create antiseptic properties inhibiting fungal growth. 
This organic remedy is most effective when applied regularly as a preventative measure during the growing season. 
It offers a low-cost, chemical-free alternative for gardeners looking for sustainable powdery mildew control.',
            ],
            [
                'title' => 'Baking Soda',
                'description' => 'A homemade baking soda solution (1 tablespoon per gallon of water) alters leaf surface pH, deterring fungal colonization. 
Adding a small amount of horticultural oil or soap improves solution adhesion to leaf surfaces, enhancing its effectiveness. 
While not a cure, baking soda sprays can slow the spread of existing powdery mildew and prevent new infections. 
Consistent application is key to success, particularly during warm, dry periods favorable to mildew outbreaks.',
            ],
        ],
        'preventions' => [
            [
                'title' => 'Air Circulation',
                'description' => 'Ensuring adequate spacing between cherry trees allows for free airflow, reducing humidity and discouraging fungal growth. 
Good orchard layout and training of tree canopies minimize shaded areas where powdery mildew is more likely to develop. 
Proper air circulation helps keep foliage dry, creating an inhospitable environment for spore germination and spread. 
Combined with pruning, this cultural control is a fundamental part of integrated powdery mildew management.',
            ],
            [
                'title' => 'Resistant Varieties',
                'description' => 'Selecting powdery mildew-resistant cherry varieties offers a practical, long-term approach to minimizing disease risk. 
While not completely immune, these cultivars show significantly lower infection rates and require fewer interventions. 
Plant breeders continually develop new varieties with improved resistance, tailored to specific growing regions and climates. 
Choosing resistant varieties supports sustainable, cost-effective orchard management while reducing chemical reliance.',
            ],
            [
                'title' => 'Avoid Overhead Watering',
                'description' => 'Using drip irrigation or soaker hoses delivers water directly to the root zone, minimizing excess moisture on foliage. 
Wet leaves create ideal conditions for powdery mildew spore germination, particularly in shaded, poorly ventilated areas. 
Avoiding overhead watering reduces disease incidence and helps maintain a cleaner orchard floor and healthier plants. 
Combined with other cultural practices, proper irrigation techniques contribute to effective, comprehensive mildew prevention.',
            ],
        ],
    ],
            [
    'name' => 'Corn_(maize)_Cercospora_leaf_spot',
    'origin_name' => 'Cercospora Leaf Spot',
    'scientific_name' => 'Cercospora zeae-maydis',
    'also_know_as' => json_encode(['Cercospora Leaf Spot', 'Gray Leaf Spot']),
    'type_disease' => 'Fungal disease',
    'description' => 'Cercospora leaf spot, commonly known as gray leaf spot, is a fungal disease that affects maize (corn) plants, especially under humid conditions. 
It is caused by the fungus *Cercospora zeae-maydis*, which infects leaf tissue, forming lesions that hinder the plant’s ability to photosynthesize effectively. 
As the disease progresses, it reduces grain fill and can cause significant yield loss if not managed early and effectively. 
This disease is especially problematic in fields with a history of corn residue and continuous maize cultivation.',

    'symptoms' => [
        [
            'title' => 'Leaf Lesions',
            'description' => 'The most characteristic symptom is the development of rectangular, grayish-white lesions that appear between leaf veins. 
These lesions often begin as small, tan spots but quickly expand into long, narrow streaks with well-defined margins. 
When many lesions coalesce, they can cover large portions of the leaf, leading to tissue death and reduced photosynthetic area. 
The appearance of these lesions typically begins on lower leaves and progresses upward during favorable weather conditions.',
        ],
        [
            'title' => 'Leaf Yellowing',
            'description' => 'Surrounding the lesions, leaf tissue often turns yellow as cells begin to die due to fungal invasion and toxin production. 
This yellowing is usually a response to stress caused by fungal infection and indicates declining leaf function. 
As the disease advances, entire leaves may dry out and die prematurely, especially during high disease pressure. 
Premature leaf death limits grain development and reduces overall yield potential, particularly in late-infected crops.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Timely application of fungicides such as azoxystrobin, pyraclostrobin, or propiconazole is essential for disease control. 
Fungicides should be applied when the disease is first observed or at the VT to R1 (tasseling to silking) growth stages for best protection. 
It is important to alternate fungicides with different modes of action to avoid the development of resistant fungal strains. 
Aerial or ground-based applications should ensure full canopy coverage to be effective in preventing disease progression.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating maize with non-host crops such as soybeans, legumes, or small grains can significantly reduce disease pressure. 
This practice helps break the lifecycle of *Cercospora zeae-maydis*, which overwinters in corn debris left on the soil surface. 
By avoiding continuous maize cultivation, fungal spore populations in the field are diminished, lowering infection risk in subsequent seasons. 
Rotation is especially beneficial when combined with other practices like tillage and resistant hybrids.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil is a natural antifungal treatment derived from the seeds of the neem tree and may help suppress Cercospora development. 
Mix neem oil with water according to package directions and spray on maize leaves at early symptom appearance. 
While neem oil is less effective than chemical fungicides, it may slow disease spread in small-scale or organic operations. 
Repeat applications weekly, especially during humid conditions, for best results.',
        ],
        [
            'title' => 'Garlic Extract',
            'description' => 'Garlic extract has mild antifungal properties and can be used as a supplementary method for fungal disease management. 
Crushed garlic cloves can be steeped in hot water, strained, and diluted before being sprayed on infected leaves. 
This natural remedy may help slow the spread of Cercospora spores when applied regularly in the early stages. 
Although not a primary solution, garlic extract is a safe, eco-friendly option for integrated disease control.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Resistant Hybrids',
            'description' => 'Selecting and planting maize hybrids that have been bred for resistance to gray leaf spot is one of the most effective preventive measures. 
Resistant varieties can reduce disease severity even in high-pressure environments and minimize the need for chemical treatments. 
Consult with seed providers or extension services for regionally recommended resistant hybrids with proven performance. 
Resistance should be part of an integrated strategy that includes rotation, tillage, and timely fungicide application.',
        ],
        [
            'title' => 'Tillage',
            'description' => 'Conservation tillage methods that bury infected crop residue can help reduce the amount of viable fungal spores in the soil. 
Incorporating plant debris into the soil interrupts the Cercospora lifecycle by limiting its ability to overwinter and spread. 
Deep tillage is especially helpful in no-till fields with a history of gray leaf spot where residue remains on the surface. 
Combining tillage with crop rotation further enhances disease control in high-risk areas.',
        ],
    ],
],

           [
    'name' => 'Corn_(maize)_Common_rust',
    'origin_name' => 'Common Rust',
    'scientific_name' => 'Puccinia sorghi',
    'also_know_as' => json_encode(['Common Rust']),
    'type_disease' => 'Fungal disease',
    'description' => 'Common rust is a fungal disease of maize caused by *Puccinia sorghi*, which primarily affects the leaves and reduces photosynthetic capacity. 
It spreads through wind-borne spores and thrives in moderate temperatures and high humidity, making it prevalent in moist growing conditions. 
Infections result in the development of rust-colored pustules that can weaken the plant, leading to lower yield and poor grain filling. 
While not always economically devastating, severe outbreaks can substantially impact crop quality and productivity if left unmanaged.',

    'symptoms' => [
        [
            'title' => 'Leaf Pustules',
            'description' => 'The hallmark of common rust is the presence of small, raised pustules on both the upper and lower surfaces of maize leaves. 
These pustules are typically oval or circular and range in color from orange to reddish-brown as the spores mature. 
They can appear scattered or in clusters, depending on the severity of the infection and environmental conditions. 
As pustules rupture, they release spores that facilitate secondary spread to nearby leaves or neighboring plants.',
        ],
        [
            'title' => 'Leaf Necrosis',
            'description' => 'As the disease progresses, the leaf tissue surrounding pustules may begin to yellow, darken, and eventually die. 
This necrosis disrupts normal photosynthesis, particularly when multiple pustules coalesce and damage large leaf areas. 
Dead patches on leaves reduce the plant’s energy reserves, leading to stunted growth and poor kernel development. 
In severe cases, widespread necrosis can cause premature leaf senescence and yield loss.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Early application of fungicides such as mancozeb or triazole-based products can help limit disease development. 
Timing is critical—fungicides are most effective when applied at the first signs of rust or during early vegetative growth. 
It is essential to ensure thorough leaf coverage and to monitor fields for reinfection during conducive weather. 
Alternating fungicide modes of action reduces the risk of fungal resistance over repeated applications.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Growing rust-resistant maize hybrids is a practical and economical approach to reduce the incidence of common rust. 
Many modern cultivars are bred to possess genetic resistance or tolerance to *Puccinia sorghi* and show minimal symptoms even under pressure. 
Consult seed catalogs and local extension services for hybrid recommendations adapted to your region and disease history. 
Using resistant varieties reduces dependency on fungicides and offers long-term disease control benefits.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Garlic Spray',
            'description' => 'Garlic contains sulfur compounds with antifungal properties that may help reduce rust development in early stages. 
To make garlic spray, crush several cloves and soak in warm water overnight, then strain and dilute before spraying on leaves. 
Apply consistently on infected areas to slow down spore spread and support other management practices. 
Although not as potent as commercial treatments, it’s a useful, low-cost organic option for small-scale growers.',
        ],
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil is a natural pesticide and fungicide that may help control early rust symptoms by inhibiting spore germination. 
Dilute neem oil according to label directions and apply directly to affected foliage during early mornings or late evenings. 
It creates a protective coating on the leaf surface, slowing fungal spread and reducing spore viability. 
Multiple applications may be necessary for visible effect, especially under high disease pressure.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Early Planting',
            'description' => 'Planting maize early in the season allows crops to mature before environmental conditions become favorable for rust development. 
This cultural practice avoids peak periods of spore spread and reduces the window of vulnerability for young plants. 
Early planting is particularly effective in regions where rust appears later in the growing season. 
Combining this approach with resistant hybrids and field monitoring improves disease control outcomes.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating maize with non-host crops such as legumes, vegetables, or small grains helps disrupt the rust life cycle. 
Since *Puccinia sorghi* survives only on living corn plants, removing the host reduces inoculum build-up in the field. 
Effective crop rotation limits disease carryover between seasons, especially when combined with residue management. 
This strategy is essential for fields with a known history of rust outbreaks.',
        ],
    ],
],

            [
    'name' => 'Corn_(maize)_healthy',
    'origin_name' => 'Healthy Corn',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Corn']),
    'type_disease' => 'None',
    'description' => 'Healthy corn plants exhibit vigorous growth, characterized by strong, upright stalks capable of supporting full ear development. 
Leaves are a uniform green color, free from spots, lesions, or signs of pest damage, reflecting the plant’s high nutrient and water uptake efficiency. 
These plants produce well-filled ears with kernels that are plump, uniform, and properly matured by harvest time. 
With adequate management, healthy corn stands resist environmental stresses and deliver high grain yield and quality.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy corn plants remain free of any signs of fungal, bacterial, or viral infections throughout the growing cycle. 
Leaves maintain a bright green color with smooth surfaces, showing no spotting, wilting, curling, or discoloration under ideal conditions. 
There should be no visible lesions or abnormal growths anywhere on the stalk, leaf sheaths, or ears. 
Consistent absence of disease symptoms indicates a well-maintained crop with balanced nutrients and good cultural care.',
        ],
        [
            'title' => 'Normal Growth',
            'description' => 'Healthy maize plants demonstrate uniform, vertical stalk development with leaves arranged in regular intervals. 
The ears of corn develop fully, with silk emergence occurring normally and grain filling progressing uniformly across the cob. 
Strong root systems anchor the plant securely, helping it withstand heavy winds and periods of dry weather. 
Proper growth habits and complete kernel development reflect optimal environmental conditions and nutrient availability.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Irrigation',
            'description' => 'Regular irrigation is crucial to support healthy corn growth, especially during critical stages such as tasseling and silking. 
Water stress during these phases can result in poor kernel formation, reduced grain weight, and overall yield decline. 
A combination of rainfall and supplemental irrigation helps maintain consistent soil moisture without waterlogging. 
Using drip or furrow irrigation systems can improve water efficiency, especially in regions prone to drought or irregular rainfall.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Proper fertilization supplies essential nutrients like nitrogen, phosphorus, and potassium to promote healthy plant development. 
Nitrogen is particularly important for vegetative growth and maintaining the lush green color of the foliage throughout the season. 
Phosphorus enhances root development and helps in the early establishment of the plant, while potassium strengthens stalks and improves drought tolerance. 
Soil tests should be conducted to tailor fertilizer applications to field-specific nutrient needs for optimal results.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost',
            'description' => 'Incorporating compost into the soil before planting enriches it with organic matter, improving water retention and aeration. 
Compost provides a slow-release source of nutrients, promoting sustained plant growth and enhancing soil microbial activity. 
Healthy soil with active microbial populations supports stronger root systems and reduces the likelihood of nutrient deficiencies. 
Consistent application of compost improves soil structure and fertility over multiple growing seasons.',
        ],
        [
            'title' => 'Manure',
            'description' => 'Applying well-rotted animal manure adds valuable nutrients like nitrogen, phosphorus, and potassium to the soil naturally. 
Manure improves soil texture and water-holding capacity while fostering beneficial microbial activity for long-term soil health. 
It should be incorporated into the soil several weeks before planting to prevent potential burning of young plants. 
Using composted or aged manure reduces odor, stabilizes nutrients, and ensures safe application to food crops like maize.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Weed Control',
            'description' => 'Effective weed control reduces competition for nutrients, water, and sunlight, allowing corn plants to thrive undisturbed. 
Weeds can act as hosts for pests and diseases, increasing the risk of infection or infestation in healthy corn fields. 
Mechanical cultivation, mulching, or approved herbicides can be used to suppress weed growth throughout the growing season. 
Keeping the field clean from weeds contributes directly to improved yields and overall crop health.',
        ],
        [
            'title' => 'Field Monitoring',
            'description' => 'Regular inspection of corn fields helps in the early detection of potential problems such as pests, diseases, or nutrient deficiencies. 
Monitoring allows for timely interventions like pest control, nutrient adjustments, or irrigation corrections before serious damage occurs. 
Walking fields weekly during the active growth stages ensures that issues are addressed promptly to prevent yield loss. 
Field monitoring, combined with good cultural practices, is key to sustaining healthy crops throughout the season.',
        ],
    ],
],

            [
    'name' => 'Corn_(maize)_Northern_Leaf_Blight',
    'origin_name' => 'Northern Leaf Blight',
    'scientific_name' => 'Exserohilum turcicum',
    'also_know_as' => json_encode(['Northern Leaf Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Northern leaf blight is a destructive fungal disease of maize caused by *Exserohilum turcicum*. 
It primarily affects the leaves, producing elongated, cigar-shaped lesions that interfere with the plant’s ability to conduct photosynthesis efficiently. 
Yield losses occur when infections are severe and early, as they weaken the plant’s capacity to fill kernels properly. 
This disease favors cool, wet, and humid conditions, making it a persistent issue in many temperate maize-growing regions.',

    'symptoms' => [
        [
            'title' => 'Leaf Lesions',
            'description' => 'The defining symptom of northern leaf blight is the appearance of long, narrow, cigar-shaped lesions on maize leaves. 
Initially grayish-green, these lesions expand and often turn tan as they age, sometimes spanning several inches in length. 
They are typically bordered by healthy green tissue but can coalesce during severe infections, covering large portions of the leaf. 
These lesions are most noticeable on lower leaves first but can spread upward in conducive environmental conditions.',
        ],
        [
            'title' => 'Leaf Dieback',
            'description' => 'As lesions enlarge and multiply, surrounding leaf tissue may yellow and eventually die back prematurely. 
This dieback reduces the effective photosynthetic area of the plant, weakening its ability to produce energy for grain filling. 
In severe cases, entire leaves can collapse before the crop reaches maturity, particularly if disease develops early in the season. 
This loss of green tissue can lead to lightweight kernels, reduced ear size, and substantial yield penalties for farmers.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Applying fungicides such as chlorothalonil, azoxystrobin, or propiconazole is effective in controlling northern leaf blight. 
Timing is crucial; applications should occur at the onset of early symptoms or during the VT (tasseling) stage for preventative protection. 
Reapplication may be necessary during prolonged wet seasons or when resistant hybrids are not planted. 
Using fungicides from different classes in rotation reduces the risk of resistance development by the pathogen.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating maize with non-host crops such as legumes or small grains disrupts the disease’s lifecycle. 
Since *Exserohilum turcicum* survives in infected corn residue, alternating crops allows time for the pathogen’s populations to decline naturally. 
Crop rotation works best when paired with good residue management, like tillage, to bury infected plant material. 
Implementing rotation helps reduce future infection pressure and contributes to overall field sustainability.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil is an organic remedy that possesses antifungal properties capable of inhibiting spore germination. 
A diluted solution can be sprayed directly onto infected and at-risk foliage to slow disease development. 
While neem oil alone may not completely halt severe outbreaks, it can complement other control methods in integrated systems. 
Consistent application during early infection phases yields better protective effects than late reactive treatments.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'Baking soda solutions work by creating an alkaline environment on the leaf surface that is unfavorable to fungal growth. 
Mix 1 tablespoon of baking soda with 1 gallon of water and add a few drops of dish soap to help the solution adhere to leaves. 
Regular spraying can provide mild suppression of fungal spread, especially in small-scale or organic farming operations. 
This method is a supportive remedy and should be paired with cultural and chemical practices for best results.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Resistant Hybrids',
            'description' => 'One of the most effective preventive strategies is to plant maize hybrids specifically bred for resistance to northern leaf blight. 
These varieties typically possess genetic traits that limit lesion development and slow disease progression under favorable conditions. 
Consult regional seed guides or local agricultural extension services to identify hybrids suited to your area and disease history. 
Using resistant cultivars reduces reliance on fungicides and can significantly improve yield stability during disease outbreaks.',
        ],
        [
            'title' => 'Tillage',
            'description' => 'Tillage practices that bury infected corn residue help reduce fungal inoculum in the soil, breaking the pathogen’s life cycle. 
This is particularly effective in fields where infected plant debris remains on the soil surface after harvest. 
Conventional plowing or deep incorporation of residues is recommended in high-risk fields with a history of northern leaf blight. 
Combining tillage with resistant varieties and crop rotation forms the foundation of integrated disease management programs.',
        ],
    ],
],

            [
    'name' => 'Grape___Black_rot',
    'origin_name' => 'Black Rot',
    'scientific_name' => 'Guignardia bidwellii',
    'also_know_as' => json_encode(['Black Rot']),
    'type_disease' => 'Fungal disease',
    'description' => 'Black rot is a serious fungal disease of grapes caused by *Guignardia bidwellii*, affecting both leaves and fruit. 
It thrives in warm, humid conditions, particularly during spring and early summer when new growth is most vulnerable. 
The disease starts with small, dark lesions on leaves, which later spread to shoots and fruit, leading to shriveled, mummified berries. 
Without effective control, black rot can destroy entire grape clusters, severely impacting vineyard yields and fruit quality.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'The first signs of black rot are small brown spots with dark borders and yellow halos forming on grapevine leaves. 
These spots expand over time, leading to leaf distortion and premature defoliation in severe infections. 
Lesions often contain tiny black fungal structures known as pycnidia, which release spores responsible for spreading the disease. 
Leaf symptoms generally precede fruit infections, serving as an early warning sign for growers.',
        ],
        [
            'title' => 'Fruit Rot',
            'description' => 'Fruit infections start as small, brownish spots that quickly enlarge, becoming sunken with defined margins. 
As the disease progresses, infected berries turn black, shrivel, and become hard, forming the characteristic mummified appearance. 
Tiny black fruiting bodies (pycnidia) often develop on the surface of the rotted berries, releasing spores during wet conditions. 
Without intervention, entire grape clusters may be lost, particularly in seasons with frequent rain and high humidity.',
        ],
        [
            'title' => 'Shoot Lesions',
            'description' => 'Black rot can also infect young shoots, resulting in elongated, dark lesions that may girdle and weaken stems. 
These lesions can stunt vine growth, reduce leaf production, and make the plant more vulnerable to secondary infections. 
Shoot infections contribute to spore production, exacerbating disease pressure in the vineyard. 
Early detection of shoot lesions is vital to protect vine vigor and maintain productivity throughout the growing season.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Fungicides such as myclobutanil, captan, or mancozeb are recommended for controlling black rot infections. 
Applications should begin at bud break and continue at regular intervals, especially before rainy periods or when infection risk is high. 
Thorough coverage of foliage, fruit, and young shoots is essential to prevent new infections during the critical growth stages. 
Rotating fungicide classes helps reduce the risk of resistance development in the pathogen population.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Removing and destroying mummified berries, fallen leaves, and infected shoots is crucial for reducing fungal inoculum. 
Proper sanitation practices break the disease cycle by eliminating overwintering sources of spores in the vineyard. 
Collected debris should be burned or composted away from the growing area to prevent reinfection. 
Regular cleanup is especially important before the start of the growing season to limit early outbreaks.',
        ],
        [
            'title' => 'Pruning',
            'description' => 'Regular pruning of grapevines improves air circulation within the canopy, reducing humidity levels around foliage. 
An open canopy dries faster after rain or irrigation, creating an unfavorable environment for fungal spore germination. 
Targeting dense or overlapping shoots prevents shaded, moist conditions that promote black rot development. 
Annual pruning combined with training systems like trellising also facilitates better spray coverage when applying fungicides.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Baking Soda Spray',
            'description' => 'A homemade baking soda spray creates an alkaline film on leaf surfaces that hinders fungal growth. 
Mix 1 tablespoon of baking soda with 1 gallon of water, adding a few drops of dish soap as a surfactant. 
Apply this spray every 7–10 days during the growing season, especially after rainfall or heavy dew. 
While not as effective as commercial fungicides, this organic remedy can help suppress mild infections in smaller vineyards.',
        ],
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil acts as a natural fungicide with both preventive and suppressive properties against black rot. 
Dilute according to label instructions and apply thoroughly to leaves, shoots, and developing fruit clusters. 
Neem oil disrupts fungal spore germination and provides mild insect-repellent benefits, offering dual-purpose protection. 
Repeated applications are necessary throughout the season to maintain efficacy under high disease pressure.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Sanitation',
            'description' => 'Maintaining excellent vineyard sanitation is one of the most effective strategies to prevent black rot recurrence. 
All infected material, including mummified berries and pruned canes, should be collected and removed each year before bud break. 
This proactive cleanup minimizes the number of spores available to cause primary infections in spring. 
Annual sanitation practices, combined with fungicide sprays, form the foundation of an integrated black rot management plan.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Planting grape varieties that exhibit genetic resistance to black rot can significantly reduce disease severity. 
American grape species tend to show more resistance than some European varieties (*Vitis vinifera*), although susceptibility varies. 
Choosing resistant cultivars is especially important in humid regions or where black rot has been a persistent problem. 
Using resistant varieties lessens the need for frequent fungicide applications, promoting more sustainable vineyard practices.',
        ],
        [
            'title' => 'Canopy Management',
            'description' => 'Proper canopy management helps maintain good airflow, reduce humidity, and ensure rapid drying of leaves after wet periods. 
Training vines on trellises, thinning excess shoots, and pruning crowded growth all contribute to better air penetration. 
These practices create conditions that are less favorable for fungal spore germination and infection development. 
Healthy canopy management also improves light exposure, which supports overall vine health and fruit quality.',
        ],
    ],
],

            [
    'name' => 'Grape__Esca(Black_Measles)',
    'origin_name' => 'Esca (Black Measles)',
    'scientific_name' => 'Phaeomoniella chlamydospora',
    'also_know_as' => json_encode(['Black Measles', 'Esca']),
    'type_disease' => 'Fungal disease',
    'description' => 'Esca, also known as Black Measles, is a chronic fungal disease of grapevines caused by a complex of wood-infecting fungi, 
primarily *Phaeomoniella chlamydospora* and *Phaeoacremonium aleophilum*. The disease affects the internal structure of vines, 
causing vascular dysfunction and leading to reduced vine vigor and fruit quality. 
It is particularly problematic in mature vineyards, where it can severely impact both yield and the productive lifespan of vines.',

    'symptoms' => [
        [
            'title' => 'Leaf Symptoms',
            'description' => 'Leaves of infected vines often develop striking tiger-striping patterns of yellow and brown discoloration, 
especially visible during late summer. The edges of leaves may curl or appear scorched, mimicking symptoms of drought stress. 
These foliar symptoms typically appear intermittently on some shoots while others remain unaffected, adding to diagnostic difficulty. 
Over time, repeated infections can lead to weakening of the entire vine and significant reductions in foliage density.',
        ],
        [
            'title' => 'Berry Spots',
            'description' => 'Berries on affected vines can develop dark, measles-like spots that disrupt their surface and overall appearance. 
These spots reduce fruit marketability, making them undesirable for fresh consumption or winemaking. 
In some cases, affected grapes may shrivel or crack, further diminishing their quality and increasing susceptibility to secondary infections. 
The aesthetic damage and compromised fruit structure have considerable economic consequences in commercial vineyards.',
        ],
        [
            'title' => 'Wood Discoloration',
            'description' => 'Internally, Esca causes dark streaking and decay in the woody tissues of the grapevine trunk and arms. 
When cut open, infected wood shows wedge-shaped zones of necrosis or dark staining, often with spongy, rotted texture in advanced stages. 
This internal damage weakens the vine’s structural integrity, making it more prone to breakage and dieback. 
Chronic infections over several seasons can lead to partial or complete vine collapse, requiring vine removal or replanting.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Surgical Removal',
            'description' => 'Surgical removal involves cutting out infected wood tissue using sanitized pruning tools. 
Careful excision of necrotic areas, followed by retraining of healthy shoots, can prolong the productive life of mildly affected vines. 
This method requires precision to avoid excessive removal of healthy wood, which could further stress the vine. 
After cutting, wound-sealing compounds may be applied to reduce the chance of reinfection by fungal spores.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Good sanitation practices involve removing and properly disposing of infected plant parts, including pruned branches, canes, and dead wood. 
These infected materials act as reservoirs of fungal spores that can infect new pruning wounds during wet weather. 
Burning or chipping debris away from the vineyard helps prevent spore dispersal during the growing season. 
Consistent sanitation, practiced annually, reduces the buildup of fungal inoculum over time.',
        ],
        [
            'title' => 'Fungicide Trials',
            'description' => 'Several systemic fungicides, such as fosetyl-Al or sodium arsenite, have been tested for effectiveness against Esca. 
However, results have been mixed, and no chemical treatments currently guarantee full control or eradication of the disease. 
Some vineyards use these fungicides in experimental or integrated programs to slow disease progression. 
Consulting with local agricultural extension offices may provide updated recommendations specific to regional regulations and trial data.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Vinegar Spray',
            'description' => 'Diluted vinegar can serve as a mild antifungal agent, applied directly to pruning wounds or infected areas. 
While not capable of eliminating deep infections, it may help reduce surface fungal populations and slow disease spread. 
A common ratio is 1 part vinegar to 9 parts water, sprayed carefully to avoid damaging surrounding healthy tissues. 
It is generally used in smaller vineyards or as a supplementary treatment alongside other integrated disease management practices.',
        ],
        [
            'title' => 'Garlic Extract',
            'description' => 'Garlic extract contains sulfur compounds known to have antifungal properties that may inhibit fungal spore germination. 
To prepare, crushed garlic is steeped in water, strained, and sprayed onto leaves, wood surfaces, or pruning wounds. 
Though not a cure for systemic infections, garlic sprays may deter surface fungal activity and reduce disease spread between vines. 
Repeated applications during vulnerable periods, such as post-pruning, yield better preventive results than occasional use.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Proper Pruning',
            'description' => 'Pruning should be done during dry periods to minimize the likelihood of fungal spore entry into fresh cuts. 
Always use sanitized tools, and consider applying wound-protectant pastes to exposed cuts to seal them from fungal invasion. 
Avoid large pruning cuts whenever possible, as they provide easier access for wood-inhabiting fungi. 
Train vineyard workers to recognize symptoms early and prioritize careful pruning practices to limit new infections.',
        ],
        [
            'title' => 'Vineyard Hygiene',
            'description' => 'Practicing good vineyard hygiene reduces the spread and severity of Esca infections over multiple seasons. 
Regularly removing dead or dying wood, fallen debris, and heavily infected vines limits the fungal spore load present in the vineyard. 
Keeping the vineyard floor clean and well-maintained also aids in airflow, discouraging fungal spore germination. 
Good hygiene is most effective when combined with other cultural practices, such as pruning hygiene and vine training systems.',
        ],
        [
            'title' => 'Stress Reduction',
            'description' => 'Vines under stress are more vulnerable to Esca, so maintaining overall vine health is key to prevention. 
Providing sufficient water during dry periods, avoiding nutrient deficiencies, and ensuring balanced fertilization support vine resilience. 
Avoid mechanical damage to trunks and roots during vineyard operations, as injuries can create entry points for fungal pathogens. 
Healthy, vigorous vines can often better withstand low levels of infection and continue producing acceptable yields for longer periods.',
        ],
    ],
],

            [
    'name' => 'Grape___healthy',
    'origin_name' => 'Healthy Grape',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Grape']),
    'type_disease' => 'None',
    'description' => 'Healthy grapevines are characterized by vigorous, balanced growth with lush green foliage and sturdy shoots. 
These vines consistently produce high-quality grape clusters with good size, color, and sugar content. 
Properly maintained healthy grapevines are also more resistant to pests and diseases, helping reduce the need for chemical treatments. 
A healthy vineyard reflects proper cultural practices, good soil management, and ongoing monitoring of environmental conditions.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy grapevines display clean, vibrant green leaves that are fully expanded without discoloration or deformities. 
The absence of spots, lesions, or wilting indicates that the plant is free from major fungal, bacterial, or viral infections. 
Leaves are turgid, glossy, and uniformly colored, contributing to efficient photosynthesis and overall plant vigor. 
Monitoring leaf appearance throughout the growing season is a reliable indicator of grapevine health.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Grapes on healthy vines are firm, uniformly sized, and exhibit full, rich color based on variety. 
Berries should be plump, with intact skins and no evidence of cracking, shriveling, or fungal blemishes. 
Fruit set is generally even, leading to well-formed clusters suitable for fresh consumption or winemaking. 
High-quality fruit from healthy grapevines ensures better market prices and desirable characteristics for wine production.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Canopy Management',
            'description' => 'Proper canopy management through pruning, training, and shoot positioning is key to sustaining healthy grapevines. 
An open canopy improves sunlight penetration, air circulation, and facilitates easier monitoring for potential pests or diseases. 
Pruning excess growth encourages the development of strong, fruitful shoots and prevents overcrowding in the vineyard. 
Consistent canopy management throughout the growing season enhances both vine health and fruit quality.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Applying balanced fertilizers, including nitrogen, phosphorus, and potassium, ensures optimal nutrient availability for grapevines. 
Soil tests should be conducted periodically to guide fertilization practices and avoid nutrient imbalances or deficiencies. 
Incorporating organic matter such as compost further improves soil fertility and microbial health, supporting sustained growth. 
Timely fertilization, especially before the onset of vigorous spring growth, contributes to the long-term productivity of the vines.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Organic Mulch',
            'description' => 'Applying organic mulch such as straw, wood chips, or shredded leaves around the base of grapevines has multiple benefits. 
Mulch helps retain soil moisture, suppresses weed growth, and regulates soil temperature, reducing plant stress during hot periods. 
Additionally, organic mulch decomposes over time, contributing organic matter that improves soil structure and nutrient availability. 
It also encourages beneficial soil organisms that enhance overall vineyard health naturally.',
        ],
        [
            'title' => 'Compost',
            'description' => 'Incorporating compost into vineyard soil enhances nutrient levels while improving water retention and soil structure. 
Compost provides a rich source of organic matter, fostering microbial activity and promoting healthier root systems. 
Regular application around the root zone helps sustain vine health over time and reduces the need for synthetic fertilizers. 
Compost can be produced on-site from vineyard prunings, grape pomace, and other organic residues, promoting sustainable practices.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Regular Monitoring',
            'description' => 'Inspecting grapevines regularly allows early detection of potential pest or disease problems before they escalate. 
Monitoring should include careful examination of leaves, shoots, tendrils, and fruit clusters throughout the growing season. 
Regular observation enables timely interventions, reducing the likelihood of yield loss or the need for aggressive treatments. 
Keeping detailed records of observations and actions taken supports long-term vineyard health management plans.',
        ],
        [
            'title' => 'Proper Watering',
            'description' => 'Consistent and appropriate watering is crucial to maintaining healthy grapevines, especially during dry periods. 
Overwatering should be avoided, as excessive moisture can lead to root rot, fungal infections, and poor fruit development. 
Drip irrigation systems provide efficient water delivery directly to the root zone while minimizing excess foliage wetness. 
Adjust watering schedules based on seasonal weather conditions, soil moisture levels, and vine growth stages to optimize health.',
        ],
    ],
],

            [
    'name' => 'Grape__Leaf_blight(Isariopsis_Leaf_Spot)',
    'origin_name' => 'Leaf Blight (Isariopsis Leaf Spot)',
    'scientific_name' => 'Pseudocercospora vitis',
    'also_know_as' => json_encode(['Isariopsis Leaf Spot', 'Leaf Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Leaf blight, also known as Isariopsis leaf spot, is a common fungal disease affecting grapevines in many growing regions. 
It primarily targets the foliage, producing characteristic dark lesions that can severely impair the plant’s photosynthesis capacity. 
As the disease progresses, leaf damage intensifies, leading to premature defoliation and weakened vine vigor over time. 
Without proper management, repeated infections can impact both the yield and quality of grape harvests across seasons.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Initial symptoms appear as irregular, dark brown to nearly black spots that often have yellow halos surrounding them. 
These spots typically start on older leaves but can spread to younger foliage in favorable humid conditions. 
The spots may coalesce to form larger blighted areas, significantly reducing the surface available for photosynthesis. 
These distinctive markings are key identifiers used by growers to recognize the onset of Isariopsis leaf spot in vineyards.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'As the infection advances, heavily spotted leaves begin to dry out and fall prematurely from the vine. 
Defoliation reduces the plant’s ability to produce and ripen fruit, resulting in poor grape cluster development. 
Leaf loss can also weaken the overall energy reserves of the vine, making it more susceptible to other pests and diseases. 
Premature leaf drop is one of the most detrimental effects of Isariopsis leaf spot in terms of vineyard productivity.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Applying protective fungicides such as sulfur or captan during early leaf development stages is highly effective. 
Fungicide treatments should begin in early spring and be repeated at regular intervals, especially in wet conditions. 
Rotating fungicides with different modes of action helps to prevent the development of fungal resistance over time. 
Consistent fungicide applications are critical to maintaining healthy foliage and reducing long-term vineyard losses.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Sanitation practices play a vital role in breaking the disease cycle by removing sources of fungal spores. 
Regularly collect and destroy fallen, infected leaves, especially during the post-harvest cleanup phase. 
Proper disposal of infected plant material limits fungal spore populations and minimizes early infections in subsequent seasons. 
Combining sanitation with fungicide application significantly improves overall disease control in vineyards.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil, a natural antifungal agent, can help suppress the spread of Isariopsis leaf spot on grape leaves. 
Prepare a diluted spray solution and apply it evenly on both sides of the leaves, especially after rainfall. 
Neem oil not only reduces fungal growth but also deters certain pests that may compound plant stress. 
Regular neem oil applications are recommended as part of integrated vineyard management with organic methods.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'A homemade baking soda spray can help create an inhospitable environment for fungal spores on leaf surfaces. 
Mix one tablespoon of baking soda per gallon of water and add a few drops of mild liquid soap for better adhesion. 
This alkaline solution disrupts fungal development and can slow the expansion of existing leaf spots. 
Baking soda sprays are most effective when applied preventively or at the very first signs of infection.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Air Circulation',
            'description' => 'Improving air circulation around grapevines is critical to reducing humidity levels that favor fungal development. 
Pruning excess shoots and leaves prevents overcrowding and encourages faster leaf drying after rain or dew. 
Training vines on trellises with adequate spacing between rows further reduces leaf wetness duration. 
Good airflow significantly lowers the risk of fungal outbreaks and supports overall vineyard health.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Switching to drip irrigation systems helps keep the foliage dry, minimizing ideal conditions for fungal growth. 
Overhead watering often contributes to prolonged leaf wetness, providing an entry point for fungal pathogens. 
Drip irrigation delivers water directly to the root zone, improving water use efficiency while protecting leaves from disease. 
Avoiding overhead irrigation is a simple but highly effective step in preventing Isariopsis leaf spot infections.',
        ],
    ],
],
            [
    'name' => 'Orange__Haunglongbing(Citrus_greening)',
    'origin_name' => 'Huanglongbing (Citrus Greening)',
    'scientific_name' => 'Candidatus Liberibacter asiaticus',
    'also_know_as' => json_encode(['Citrus Greening', 'Huanglongbing']),
    'type_disease' => 'Bacterial disease',
    'description' => 'Huanglongbing (HLB), commonly known as citrus greening, is one of the most devastating citrus diseases worldwide. 
It is caused by a phloem-restricted bacterium that blocks nutrient transport within citrus trees, leading to severe decline. 
The disease significantly impacts fruit quality, tree productivity, and eventually results in complete tree death if unmanaged. 
HLB is primarily spread by the Asian citrus psyllid, a small insect that acts as a vector by transmitting the bacteria as it feeds on sap.',

    'symptoms' => [
        [
            'title' => 'Leaf Mottling',
            'description' => 'Leaves develop irregular, blotchy yellow patterns that are often mistaken for nutrient deficiencies. 
This mottling usually appears asymmetrical across the leaf midrib, which is a distinguishing feature of HLB. 
Over time, the leaves may become hardened, with curled or misshapen edges, contributing to the tree’s overall decline. 
The chlorotic appearance greatly reduces photosynthesis, weakening the tree and affecting fruit production.',
        ],
        [
            'title' => 'Fruit Symptoms',
            'description' => 'Affected fruits are often small, lopsided, and remain green on one side, even when ripe elsewhere. 
Internally, the fruit may have aborted seeds and an off-bitter flavor, making them undesirable for consumption. 
Fruit skin may also display uneven or patchy coloration, sometimes accompanied by corky or bumpy textures. 
These visual and taste abnormalities drastically reduce market value, severely impacting citrus growers economically.',
        ],
        [
            'title' => 'Tree Decline',
            'description' => 'As the disease advances, citrus trees exhibit general stunting, sparse foliage, and twig dieback. 
The canopy becomes thin, with many bare branches, and newly emerging shoots may fail to grow properly. 
Root decline often occurs before visible symptoms appear on the canopy, further weakening the plant’s nutrient absorption. 
If unmanaged, HLB inevitably leads to the complete death of the citrus tree over a span of several years.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Insecticide Application',
            'description' => 'Controlling the Asian citrus psyllid with systemic insecticides like imidacloprid is the primary management strategy. 
Insecticides should be applied regularly, especially during flush periods when new growth attracts psyllids. 
Using a combination of foliar sprays and soil drenches can provide broader, longer-lasting protection against infestation. 
While insecticides reduce disease spread, they do not cure infected trees, making vector control essential for containment.',
        ],
        [
            'title' => 'Tree Removal',
            'description' => 'Infected trees act as reservoirs of the bacteria and must be removed to limit disease spread to healthy trees. 
Removing diseased trees promptly upon detection reduces inoculum sources available to psyllid vectors. 
Proper disposal—either burning or deep burial—is essential to ensure that infected plant material cannot harbor pathogens. 
Many citrus-growing regions mandate tree removal programs to prevent the rapid escalation of HLB outbreaks.',
        ],
        [
            'title' => 'Nutritional Support',
            'description' => 'While not curative, applying balanced fertilizers with additional foliar micronutrients helps prolong productivity. 
Micronutrients such as zinc, manganese, and magnesium can partially alleviate chlorosis and improve foliage health. 
Supplemental nutrition can delay severe symptom development, buying valuable time for commercial growers. 
A well-fed tree is better able to tolerate stress from HLB, extending the productive lifespan of mildly affected trees.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Micronutrient Spray',
            'description' => 'Regular foliar sprays containing zinc, manganese, and magnesium can help mitigate leaf yellowing symptoms. 
Though they do not eliminate the bacterium, they provide temporary improvements in overall tree vigor and appearance. 
Such treatments are commonly combined with professional nutrient programs for best results in citrus orchards. 
Home growers may benefit from using commercial citrus micronutrient mixes designed for foliar application.',
        ],
        [
            'title' => 'Soap Spray',
            'description' => 'Insecticidal soap can be applied to citrus trees to suppress populations of the Asian citrus psyllid. 
These soaps disrupt the insect’s cell membranes, reducing their numbers without relying on synthetic chemicals. 
Frequent applications during active psyllid breeding seasons help minimize the risk of bacterial transmission. 
Soap sprays are particularly suitable for home gardens and organic growers practicing low-impact pest management.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Psyllid Control',
            'description' => 'Maintaining constant vigilance for the Asian citrus psyllid is critical for preventing new infections. 
Yellow sticky traps can be used to monitor psyllid populations in orchards and residential areas. 
Combining chemical and organic pest control methods provides a more sustainable approach to long-term psyllid suppression. 
Ongoing psyllid control is essential, as the vector remains the most significant threat to citrus tree health.',
        ],
        [
            'title' => 'Certified Stock',
            'description' => 'Planting only disease-free, certified nursery stock is one of the most important preventive measures available. 
Certified stock is produced under controlled conditions to ensure plants are free of Huanglongbing pathogens. 
Using uncertified or unknown planting material greatly increases the risk of introducing infected plants to healthy orchards. 
Commercial citrus growers often rely on government-certified programs for sourcing propagation materials safely.',
        ],
        [
            'title' => 'Quarantine Measures',
            'description' => 'Enforcing quarantine zones helps restrict the movement of citrus trees, fruit, and propagation material. 
These measures prevent the accidental spread of the Asian citrus psyllid and infected plant material into clean areas. 
Compliance with local quarantine laws and reporting suspected cases of HLB is a community responsibility in citrus regions. 
Strict quarantine enforcement is often a requirement for growers participating in citrus export programs.',
        ],
    ],
],

            [
    'name' => 'Peach___Bacterial_spot',
    'origin_name' => 'Bacterial Spot',
    'scientific_name' => 'Xanthomonas arboricola pv. pruni',
    'also_know_as' => json_encode(['Bacterial Spot']),
    'type_disease' => 'Bacterial disease',
    'description' => 'Bacterial spot is a significant disease of peach and other stone fruits, caused by the bacterium Xanthomonas arboricola pv. pruni.
It primarily affects leaves, fruits, and twigs, leading to unsightly lesions and overall reduced plant health.
If left unmanaged, bacterial spot can lead to defoliation, fruit cracking, and significant loss of marketable yield.
Warm, wet conditions during spring and summer favor disease development, spreading the bacteria quickly through splashing water.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Symptoms begin as small, water-soaked lesions on leaves, often near the tips or along the margins.
As the infection progresses, these spots enlarge and turn dark brown or black, frequently surrounded by yellow halos.
Severely affected leaves may exhibit shot-hole symptoms, where necrotic tissue falls out leaving small perforations.
Heavy infections can lead to premature leaf drop, stressing the tree and reducing its ability to photosynthesize.',
        ],
        [
            'title' => 'Fruit Lesions',
            'description' => 'Infected fruit develops small, dark, and sunken lesions scattered across the skin’s surface.
As the disease advances, these lesions may enlarge and crack, exposing the underlying tissue to secondary infections.
Cracked fruit not only reduces aesthetic value but also makes peaches more susceptible to decay during storage or transport.
Such blemishes drastically reduce the fruit’s market value, making bacterial spot a serious concern for commercial growers.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'The accumulation of leaf lesions eventually leads to premature defoliation of the peach tree.
Loss of foliage reduces the tree’s photosynthetic capacity, slowing growth and weakening overall vigor.
Without enough healthy leaves, the tree may struggle to develop fruit properly, further decreasing yield.
Repeated defoliation over multiple seasons can cause long-term stress, increasing vulnerability to other diseases or pests.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Bactericide Application',
            'description' => 'Applying copper-based bactericides remains one of the most effective treatments for bacterial spot.
Applications should begin in early spring during bud swell and continue at regular intervals throughout wet seasons.
Oxytetracycline sprays can also be used during bloom to reduce bacterial populations on flowers and young shoots.
Care should be taken to follow recommended rates to avoid phytotoxicity, especially on sensitive peach varieties.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Cultivating resistant peach varieties can provide significant protection against bacterial spot outbreaks.
Varieties like Clayton, Candor, and Winblo are known for their improved tolerance to the disease under favorable conditions.
Choosing resistant cultivars reduces reliance on chemical controls, supporting integrated pest management strategies.
Consult with local agricultural extension services for recommendations on varieties best suited to your region’s climate.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Good orchard hygiene is essential in limiting the spread of bacterial spot between seasons.
All infected leaves, twigs, and fallen fruit should be removed from the orchard floor after harvest or during winter pruning.
Disposing of this material properly reduces the bacterial inoculum available for infection the following year.
Additionally, disinfecting pruning tools between cuts helps prevent bacterial transmission during cultural practices.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Garlic Spray',
            'description' => 'Garlic extract is often used as a natural antimicrobial treatment to suppress bacterial growth.
Its sulfur-containing compounds have antibacterial properties that can reduce bacterial populations on foliage and fruit.
For best results, the extract should be applied regularly during periods of wet or humid weather conducive to infection.
While not a cure, it can provide supplemental control when combined with good cultural practices.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'A homemade baking soda solution can help reduce bacterial populations on leaves and fruit surfaces.
Typically mixed with water and a small amount of liquid soap, this solution alters surface pH, making it unfavorable for bacteria.
Regular applications during periods of rain or humidity can help slow the spread of bacterial spot on peach trees.
Although not as effective as chemical treatments, it serves as a low-cost, environmentally friendly alternative for home gardens.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Overhead irrigation promotes splashing water, which spreads bacterial cells from leaf to leaf.
Switching to drip irrigation systems or soaker hoses helps keep the foliage dry, minimizing the risk of infection.
Reducing moisture on leaves not only prevents bacterial spread but also discourages other fungal pathogens.
Ensuring good drainage around trees further limits standing water, which can serve as a bacterial reservoir.',
        ],
        [
            'title' => 'Pruning',
            'description' => 'Regular pruning improves airflow through the tree’s canopy, allowing foliage to dry more quickly after rainfall.
By thinning dense growth, pruning reduces humidity around leaf surfaces, making conditions less favorable for bacterial proliferation.
Winter or dormant season pruning is best, combined with disinfecting tools to prevent disease carryover between trees.
Effective pruning is an essential component of integrated management for bacterial spot in both home and commercial orchards.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Avoid planting new peach or stone fruit trees in locations where bacterial spot infections have occurred previously.
Bacteria can persist in plant debris or soil near infected trees, posing a risk to newly planted susceptible varieties.
Crop rotation with unrelated species or fallowing infected areas for several years can reduce residual bacterial populations.
In commercial settings, rotating to unrelated crops or spacing replanting over time is recommended for optimal prevention.',
        ],
    ],
],

            [
    'name' => 'Peach___healthy',
    'origin_name' => 'Healthy Peach',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Peach']),
    'type_disease' => 'None',
    'description' => 'Healthy peach trees are characterized by vibrant green foliage, strong branch growth, and the production of high-quality fruits.
These trees exhibit balanced growth patterns throughout the season, with well-developed canopies and firm, colorful fruit.
A properly maintained peach tree will show no signs of disease, decay, or nutrient deficiencies during its growing period.
Ensuring consistent care practices, including pruning, fertilization, and pest management, is key to maintaining peach tree health.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Leaves on a healthy peach tree should be uniformly green with a glossy sheen, indicating good nutrient balance.
There should be no visible spots, lesions, or signs of curling that might indicate pest damage or disease presence.
Healthy foliage contributes to optimal photosynthesis, which supports fruit development and overall plant vigor.
Consistently vibrant leaves throughout the season signal that the tree is thriving under its current care regimen.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Healthy peaches are firm to the touch, displaying bright, even coloration according to their specific variety.
The fruit surface is smooth and free of blemishes, cracks, or discoloration, indicating that it has grown without disease or pest interference.
Healthy peaches have optimal flavor and sweetness, developing fully in both size and texture by harvest time.
Proper tree nutrition and water management play a significant role in ensuring fruit reaches this desirable quality.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Pruning',
            'description' => 'Annual pruning is essential to maintain a healthy peach tree structure and encourage productive fruiting wood.
It involves removing dead or diseased branches, thinning out dense growth, and shaping the canopy for optimal airflow.
Proper pruning improves light penetration, which supports both foliage health and fruit development throughout the growing season.
Perform pruning during the dormant season, usually in late winter or early spring, before new growth emerges.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Balanced fertilization provides peach trees with the essential nutrients required for vigorous growth and high yields.
Apply a well-balanced fertilizer in early spring as buds begin to swell, ensuring steady growth throughout the season.
Nitrogen, phosphorus, and potassium are especially important, along with trace elements like magnesium and zinc for optimal tree performance.
Avoid over-fertilizing, as excessive nutrients can lead to lush foliage at the expense of fruit production and tree balance.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Mulch',
            'description' => 'Applying organic mulch, such as straw, bark chips, or compost, helps retain soil moisture around the tree base.
Mulch serves as a natural insulator, regulating soil temperature during seasonal fluctuations and preventing weed growth.
Additionally, organic mulch decomposes slowly over time, enriching the soil with beneficial nutrients for sustained tree health.
Keep mulch a few inches away from the trunk to avoid rot while maintaining effective coverage in the root zone.',
        ],
        [
            'title' => 'Compost',
            'description' => 'Compost serves as a natural fertilizer and soil conditioner, enriching the root zone with organic matter and nutrients.
It improves soil texture, promotes healthy microbial activity, and enhances water retention capabilities for sustained moisture availability.
Regularly adding compost helps maintain a fertile environment that supports both vigorous foliage growth and abundant fruit production.
Homemade or well-cured compost should be applied during early spring or autumn as part of routine tree care.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Regular monitoring is crucial for early detection of potential threats such as pests, fungal infections, or nutrient deficiencies.
By inspecting the tree weekly, especially during active growth seasons, you can catch problems before they escalate into serious issues.
Look closely at leaf surfaces, fruit, and branch joints for any irregularities, spots, or discoloration that may indicate stress.
Promptly addressing minor issues ensures the tree remains healthy and productive over the long term.',
        ],
        [
            'title' => 'Proper Watering',
            'description' => 'Consistent, moderate watering is key to peach tree health, especially during dry spells or periods of active fruit growth.
Avoid overwatering, as excessive moisture around the roots can cause oxygen deprivation, leading to root rot and decline.
Ensure soil drainage is adequate to prevent standing water, and adjust watering frequency according to seasonal rainfall patterns.
Drip irrigation systems or soaker hoses work well to provide deep, even moisture without wetting the foliage unnecessarily.',
        ],
    ],
],

            [
    'name' => 'Pepper,bell__Bacterial_spot',
    'origin_name' => 'Bacterial Spot',
    'scientific_name' => 'Xanthomonas campestris pv. vesicatoria',
    'also_know_as' => json_encode(['Bacterial Spot']),
    'type_disease' => 'Bacterial disease',
    'description' => 'Bacterial spot is a serious disease of bell peppers caused by the bacterium *Xanthomonas campestris* pv. *vesicatoria*.
It primarily targets the leaves and fruits, forming dark, water-soaked spots that can expand and merge over time.
The disease thrives in warm, humid conditions and spreads rapidly through rain splash, irrigation, or contaminated tools.
If left untreated, bacterial spot can significantly reduce both the yield and market quality of pepper crops.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Initial symptoms appear as small, water-soaked spots on the undersides of leaves, which gradually enlarge.
Over time, these lesions turn dark brown or black and may develop characteristic yellow halos around their margins.
As the disease progresses, heavily infected leaves may appear scorched, with large dead patches forming.
Severely affected foliage often drops prematurely, weakening the plant and reducing its productivity.',
        ],
        [
            'title' => 'Fruit Spots',
            'description' => 'Bacterial spot causes rough, raised, dark brown to black lesions on the fruit surface, often surrounded by a faint halo.
As the infection progresses, these lesions may become scabby and crack, making the fruit unmarketable for commercial sale.
While the internal fruit tissue may remain unaffected initially, secondary infections can lead to rot and further spoilage.
Even mild infections on fruit surfaces can drastically reduce the aesthetic and market value of pepper harvests.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'One of the more severe symptoms is premature leaf drop caused by extensive leaf lesion development.
As more leaves fall, the plant becomes increasingly stressed, exposing fruit to sunscald and reducing overall yield potential.
Leaf drop leads to reduced photosynthesis, further compounding the plant’s ability to produce healthy, marketable fruits.
This defoliation often leads to weak plant structure and increased susceptibility to secondary pests and diseases.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Bactericide Application',
            'description' => 'Applying copper-based bactericides early in the growing season can help slow the spread of bacterial spot.
Copper sprays should be used as a preventive measure, especially during humid weather or rainy periods.
It’s important to follow label instructions, as excessive use of copper can lead to phytotoxicity on pepper plants.
For improved effectiveness, copper sprays can sometimes be combined with other bactericides such as mancozeb or zinc compounds.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating pepper crops with non-solanaceous species (such as grains or legumes) helps break the bacterial cycle.
Avoid planting peppers, tomatoes, or eggplants in the same field for at least two to three years to minimize reinfection.
Crop rotation is particularly useful when combined with other cultural practices like soil solarization or mulching.
Healthy crop rotations contribute to reducing bacterial inoculum levels in the soil and surrounding environment.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Proper sanitation practices are essential in managing bacterial spot, starting with the removal of infected plants.
All crop debris should be collected and destroyed at the end of the season to reduce the survival of bacterial inoculum.
Regular disinfection of garden tools, stakes, and containers is critical to prevent the transfer of bacteria between plants.
Practicing good field hygiene reduces the risk of future outbreaks and helps maintain overall plant health.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Baking Soda Spray',
            'description' => 'A solution of baking soda mixed with water can alter the leaf surface pH, making it less favorable for bacterial growth.
To prepare, mix 1 tablespoon of baking soda with a quart of water and a few drops of mild liquid soap as a spreader.
Regular weekly applications during periods of high humidity can help suppress bacterial development on foliage and fruit.
Although not as potent as chemical bactericides, baking soda sprays provide an eco-friendly supplementary control method.',
        ],
        [
            'title' => 'Garlic Extract',
            'description' => 'Garlic extract has natural antibacterial properties that can help suppress mild bacterial infections on pepper plants.
Prepare by blending fresh garlic cloves with water and straining the liquid before applying it as a foliar spray.
Regular application can provide a natural barrier against bacterial spread while also deterring some insect pests.
Garlic spray is particularly useful in small-scale gardens where organic or chemical-free growing methods are preferred.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Resistant Varieties',
            'description' => 'Whenever possible, choose bell pepper varieties that have been bred for resistance to bacterial spot strains.
Resistant varieties can still develop mild symptoms under heavy bacterial pressure but typically sustain less overall damage.
Consult local agricultural extension offices or seed suppliers for recommendations on resistant pepper cultivars suitable for your region.
Using resistant cultivars greatly reduces the need for chemical controls and complements other integrated pest management strategies.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Overhead irrigation encourages the spread of bacterial spot by splashing bacteria from soil and infected plants onto healthy foliage.
Using drip irrigation or soaker hoses instead helps deliver water directly to the root zone without wetting the leaves.
Keeping the foliage dry significantly reduces disease incidence, particularly during periods of high humidity or rainfall.
Additionally, watering early in the day allows any water on leaves to dry quickly before evening dew formation.',
        ],
        [
            'title' => 'Seed Treatment',
            'description' => 'Treating pepper seeds with hot water before planting can eliminate surface-borne bacterial contamination.
Typically, seeds are immersed in hot water at 122°F (50°C) for 25 minutes, followed by rapid cooling to prevent damage.
Using certified, pathogen-free seeds from reputable suppliers provides another level of security against bacterial introduction.
Proper seed treatment helps ensure healthy seedlings, reducing the risk of bacterial spot introduction in the garden or field.',
        ],
    ],
],

            [
    'name' => 'Pepper,bell__healthy',
    'origin_name' => 'Healthy Bell Pepper',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Bell Pepper']),
    'type_disease' => 'None',
    'description' => 'Healthy bell pepper plants are characterized by vigorous growth, lush foliage, and the production of large, high-quality fruit.
Proper care and maintenance of these plants ensure resistance to most common pests and diseases affecting pepper crops.
Vibrantly green leaves and upright stems are indicators of good nutrition, proper hydration, and healthy root systems.
Healthy peppers not only provide good yields for consumption or sale but also contribute to overall garden ecosystem health.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy bell pepper plants have smooth, deep green leaves with no visible spots, wilting, or yellowing.
There are no signs of fungal, bacterial, or insect infestations on the stems, leaves, or developing fruits.
The plant maintains upright, sturdy growth with good branching and leaf production throughout the growing season.
Regular inspections should confirm the absence of any discoloration, curling, or irregular leaf patterns.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Fruits produced by healthy bell pepper plants are uniformly colored and firm, with smooth, unblemished skin.
The peppers develop to their full size according to their specific variety, showing no deformities or discoloration.
Inside, the fruit flesh is thick and juicy, ideal for fresh consumption, cooking, or preservation.
Healthy fruit ripens evenly, whether harvested green, red, yellow, or orange, depending on the cultivar.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Irrigation',
            'description' => 'Consistent and even watering is critical for maintaining healthy bell pepper growth, especially during hot seasons.
The soil should be kept moist but not soggy, as overwatering can lead to root rot and nutrient leaching.
Drip irrigation systems or soaker hoses are ideal for providing steady moisture without wetting the foliage.
Maintaining proper irrigation encourages uniform fruit development and reduces the risk of blossom-end rot.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Applying balanced fertilizers that include nitrogen, phosphorus, and potassium supports robust plant growth and fruit production.
Start fertilizing during transplanting and continue at regular intervals as recommended for your pepper variety.
Incorporating organic fertilizers like compost or fish emulsion can also boost soil fertility and microbial activity.
Proper fertilization ensures lush foliage, sturdy stems, and vibrant, flavorful peppers throughout the harvest season.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost Tea',
            'description' => 'Compost tea, made by steeping mature compost in water, provides beneficial microbes and nutrients for peppers.
When applied as a soil drench, it enhances microbial activity around the roots, improving nutrient uptake and plant resilience.
As a foliar spray, compost tea can help suppress foliar diseases by fostering beneficial microbial communities on leaves.
Applying compost tea every two to three weeks during the growing season strengthens plant health naturally and sustainably.',
        ],
        [
            'title' => 'Mulch',
            'description' => 'Applying a layer of straw, shredded leaves, or grass clippings around pepper plants helps retain soil moisture and regulate temperature.
Mulching also suppresses weeds, which reduces competition for water and nutrients, leading to healthier plant growth.
Organic mulches gradually break down over time, enriching the soil with valuable organic matter and nutrients.
In addition to moisture retention, mulch protects developing fruit from direct soil contact, reducing the risk of rot.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Regularly inspecting bell pepper plants allows for early detection of pests, diseases, or nutrient deficiencies.
Check both the upper and lower surfaces of leaves for any signs of spotting, holes, or insect eggs.
Monitoring helps catch issues like aphids, mites, or early fungal infections before they cause significant damage.
Early intervention combined with proper garden hygiene contributes to maintaining the overall health of the pepper crop.',
        ],
        [
            'title' => 'Weed Control',
            'description' => 'Effective weed management reduces competition for water, nutrients, and sunlight, allowing peppers to thrive.
Weeds can also harbor pests and diseases, acting as reservoirs for harmful organisms that might spread to pepper plants.
Removing weeds by hand or with mulch prevents them from overtaking garden beds and interfering with root systems.
Consistent weed control throughout the season ensures optimal growing conditions for healthy pepper production.',
        ],
    ],
],

            [
    'name' => 'Potato___Early_blight',
    'origin_name' => 'Early Blight',
    'scientific_name' => 'Alternaria solani',
    'also_know_as' => json_encode(['Early Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Early blight is a widespread fungal disease affecting potato plants, especially under warm and humid conditions.
It primarily affects older foliage first, reducing photosynthetic activity and leading to weakened plants.
If left unmanaged, the disease can significantly reduce yield by damaging both foliage and developing tubers.
Early blight thrives in gardens or fields with poor crop rotation or heavy rainfall, making proactive management essential.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'The disease starts as small, dark brown spots on older leaves, which expand over time into larger lesions.
These spots typically develop characteristic concentric rings, resembling a target or bullseye pattern.
As the lesions grow, they may merge, leading to large, necrotic patches on the foliage.
Affected leaves gradually turn yellow and die, starting from the bottom of the plant upwards.',
        ],
        [
            'title' => 'Tuber Lesions',
            'description' => 'Infected tubers develop dark, sunken lesions on their surface that are often dry and leathery to the touch.
The tissue beneath the lesions may be corky or dry-rotted, which compromises the quality and storability of the potatoes.
Secondary infections from bacteria can enter through these lesions, further degrading the tuber.
Tubers affected by early blight are usually unmarketable and unsuitable for storage or consumption.',
        ],
        [
            'title' => 'Leaf Yellowing',
            'description' => 'Surrounding the leaf spots, yellow halos form, causing parts of the leaf to lose chlorophyll.
Over time, large sections of the affected leaves turn completely yellow, disrupting the plant’s ability to photosynthesize.
This leads to premature defoliation, exposing tubers to sun damage and reducing nutrient supply to the developing potatoes.
Leaf yellowing and defoliation can cause significant reductions in potato yield and tuber size if not managed quickly.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Protective fungicides like chlorothalonil or mancozeb should be applied preventively during favorable conditions.
Start applications when plants are about 6 inches tall and continue at regular intervals, especially during rainy periods.
Ensure thorough coverage of both upper and lower leaf surfaces to maximize fungicidal protection.
Integrated use of fungicides combined with cultural practices provides the best results against early blight outbreaks.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating potato crops with non-solanaceous plants like cereals or legumes can help break the fungal disease cycle.
Avoid planting potatoes in the same spot for at least 2 to 3 consecutive seasons to reduce residual spore presence.
Crop rotation improves soil biodiversity, which helps in suppressing soilborne pathogens and fungal buildup.
A well-planned rotation combined with sanitation significantly lowers early blight occurrence over time.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Removing and destroying infected plant debris at the end of the season prevents the overwintering of fungal spores.
Ensure that all crop residue is composted properly or burned to eliminate remaining fungal pathogens.
Avoid working among plants when they are wet to prevent the spread of spores between healthy and infected areas.
Maintaining clean and well-managed fields reduces the chances of early blight developing in subsequent seasons.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil, a natural plant extract, has antifungal properties that help in controlling early blight on potato plants.
Apply neem oil as a foliar spray at weekly intervals to inhibit the spread of fungal spores on leaf surfaces.
It works by disrupting fungal growth and reproduction while also acting as a mild insect repellent.
Neem oil is particularly useful for small-scale or organic gardeners seeking eco-friendly management solutions.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'Baking soda solution, prepared by mixing baking soda with water and a small amount of liquid soap, creates an alkaline surface on leaves.
The alkaline environment discourages fungal spore germination, slowing the spread of early blight.
Regular spraying, especially before periods of high humidity or rainfall, can provide supplemental protection alongside other methods.
Baking soda is a cost-effective and environmentally friendly treatment when used properly and consistently.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Resistant Varieties',
            'description' => 'Planting potato cultivars with improved resistance to early blight can significantly reduce disease occurrence.
Varieties like “Defender” and others recommended by local agricultural extensions are bred for enhanced disease tolerance.
Although resistant varieties are not completely immune, they provide a crucial first line of defense against infection.
Combining resistant varieties with good cultural practices leads to more sustainable early blight management.',
        ],
        [
            'title' => 'Proper Spacing',
            'description' => 'Providing adequate spacing between potato plants encourages better airflow, helping leaves dry quickly after rainfall or irrigation.
Good spacing reduces humidity around foliage, making it harder for fungal spores to germinate and establish infections.
Avoid overcrowding plants, especially in humid regions or seasons with prolonged wet conditions.
Proper spacing is one of the simplest yet most effective preventative strategies against early blight.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Using drip irrigation or soaker hoses keeps moisture off the leaves, minimizing conditions that favor fungal growth.
Overhead watering should be avoided, particularly late in the day when foliage won’t have time to dry before nightfall.
Dry foliage discourages fungal spore germination, helping to prevent early infections in vulnerable lower leaves.
Implementing this watering strategy, combined with mulching and other cultural controls, supports healthier potato crops.',
        ],
    ],
],

            [
    'name' => 'Potato___healthy',
    'origin_name' => 'Healthy Potato',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Potato']),
    'type_disease' => 'None',
    'description' => 'Healthy potato plants are characterized by vigorous, upright growth and lush green foliage.
Their leaves remain uniformly colored without any spotting, curling, or yellowing throughout the season.
Underground, the tubers develop into firm, smooth, and uniformly shaped potatoes, free of blemishes or deformities.
With proper care, healthy potato plants produce high yields of quality tubers ideal for consumption or storage.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'The leaves of healthy potato plants maintain a rich green color from emergence until maturity.
There are no visible signs of wilting, spotting, discoloration, or insect damage on any parts of the foliage.
The stems remain strong and upright, supporting the vigorous growth of the canopy above.
A consistent appearance of healthy foliage indicates that the plant is absorbing water and nutrients efficiently.',
        ],
        [
            'title' => 'Normal Tubers',
            'description' => 'Beneath the soil, healthy tubers develop firm, round to oval forms depending on the variety planted.
Their skin is smooth, with no cracking, scabs, blemishes, or signs of fungal or bacterial infection.
These tubers possess ideal firmness for harvesting, handling, storage, and eventual consumption or processing.
High-quality tubers are a direct result of healthy foliage, proper watering, and optimal soil nutrition throughout growth.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Hilling',
            'description' => 'Hilling involves mounding soil around the base of potato plants as they grow to protect developing tubers.
This practice shields the tubers from sunlight, preventing greening and the production of toxic solanine.
Regular hilling improves tuber development by providing loose, well-drained soil for tubers to expand into comfortably.
Perform hilling two to three times during the season or as needed based on growth rate and soil condition.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Balanced fertilization with nitrogen, phosphorus, and potassium ensures healthy plant development and tuber production.
Nitrogen promotes leafy growth early in the season, while phosphorus and potassium enhance tuber formation and quality.
Apply fertilizer based on soil tests or follow recommended guidelines for potatoes in your region.
Regular fertilization supports healthy plants capable of resisting minor pest and disease pressures naturally.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost',
            'description' => 'Well-aged compost added to the planting area enhances soil structure and microbial life.
Compost provides a slow-release source of essential nutrients throughout the growing season.
It improves water retention in sandy soils and enhances drainage in heavier clay soils.
Using compost regularly ensures better yields, healthier tubers, and improved long-term soil fertility.',
        ],
        [
            'title' => 'Manure',
            'description' => 'Incorporating well-rotted manure before planting increases the organic matter content of the soil.
Manure improves soil aeration, water-holding capacity, and nutrient availability to growing potato plants.
Only use composted or well-aged manure to prevent introducing pathogens or weed seeds to the soil.
Regular organic matter addition leads to healthier, more resilient potato crops over successive seasons.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Regular inspection of potato plants allows early detection of any emerging pests, diseases, or nutrient deficiencies.
Walk the rows at least once a week, checking the undersides of leaves and the condition of stems and soil.
Monitoring enables swift action if problems arise, minimizing potential damage to healthy plants.
Early interventions based on observations are more effective than reacting to advanced problems later in the season.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating potatoes with crops outside of the Solanaceae family (e.g., legumes, grains) helps break disease and pest cycles.
It reduces the buildup of soilborne pathogens like early blight, late blight, and nematodes.
Practicing rotation for at least 2–3 seasons before returning potatoes to the same area promotes soil health.
Crop rotation not only benefits potatoes but enhances overall farm biodiversity and sustainability practices.',
        ],
    ],
],

            [
    'name' => 'Potato___late_blight',
    'origin_name' => 'Late Blight',
    'scientific_name' => 'Phytophthora infestans',
    'also_know_as' => json_encode(['Late Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Late blight is one of the most devastating diseases of potatoes, caused by the oomycete pathogen Phytophthora infestans.
It affects both the foliage and tubers of potato plants, leading to significant yield loss and poor tuber quality.
Under favorable wet and cool conditions, late blight spreads rapidly, destroying crops within a few weeks if unmanaged.
This disease historically contributed to major famines, such as the Irish Potato Famine in the 19th century.',

    'symptoms' => [
        [
            'title' => 'Leaf Lesions',
            'description' => 'Initial symptoms appear as small, water-soaked, dark green to black lesions on the leaves.
These lesions rapidly enlarge, often becoming irregular in shape with pale, yellowish margins surrounding them.
In humid conditions, a distinctive white, cottony fungal growth may appear on the underside of infected leaves.
Severe infection causes widespread leaf death, greatly reducing the plant’s ability to photosynthesize effectively.',
        ],
        [
            'title' => 'Tuber Rot',
            'description' => 'Late blight also affects the tubers, resulting in irregular, brown, firm to granular-textured lesions beneath the skin.
As infection progresses, tubers develop dry rot initially, which later turns soft and mushy if secondary bacteria invade.
Infected tubers often emit a foul odor, rendering them unsuitable for consumption, sale, or storage.
Tuber infections can spread post-harvest in storage facilities, compounding losses beyond the field itself.',
        ],
        [
            'title' => 'Stem Lesions',
            'description' => 'Dark brown to black lesions may form on stems, typically starting at the base and extending upward.
Affected stems often become brittle, weak, and may collapse under their own weight, causing plant lodging.
Stem infections severely restrict nutrient transport within the plant, hastening its death if left untreated.
When combined with leaf lesions, stem infections contribute to rapid decline and total yield failure in severe outbreaks.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Timely application of fungicides such as chlorothalonil, metalaxyl, or mancozeb can help contain late blight outbreaks.
Fungicides are most effective when applied preventatively or at the first signs of infection in the crop.
During prolonged wet weather, repeated applications are recommended according to manufacturer instructions or local guidelines.
Selecting fungicides with systemic properties can offer protection to both existing foliage and new growth during active outbreaks.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Removing infected plants and plant debris from the field reduces the availability of fungal spores for further spread.
Volunteer potato plants from previous seasons should also be destroyed as they can harbor the pathogen.
Post-harvest sanitation of storage facilities helps prevent tuber-to-tuber infection during storage.
Strict field hygiene is one of the most cost-effective methods of preventing long-term buildup of the pathogen.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Cultivating potato varieties bred for resistance to late blight can significantly reduce the risk of severe infection.
While no variety is completely immune, resistant cultivars exhibit slower disease progression and less severe symptoms.
Combining resistant varieties with good cultural practices provides integrated protection for commercial and home growers.
Consult with local agricultural extensions to identify the most suitable resistant cultivars for your region.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Copper Spray',
            'description' => 'Bordeaux mixture, a copper-based fungicide, is one of the oldest and most effective home remedies for late blight.
It acts by preventing fungal spores from germinating on the surfaces of leaves and stems.
Application should begin early in the growing season and be repeated every 7–10 days during wet periods.
Care should be taken to avoid excessive use, as copper can accumulate in the soil over time.',
        ],
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil, derived from the seeds of the neem tree, exhibits antifungal properties that can help slow the spread of late blight.
It forms a protective layer on plant surfaces, disrupting fungal spore germination and growth.
Neem oil applications are most effective as a preventive measure or in early stages of infection.
This organic option is safe for home gardens, beneficial insects, and can be used in combination with other treatments.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotating potatoes with crops outside the Solanaceae family, such as cereals or legumes, helps break the pathogen’s lifecycle.
Avoiding repeated potato cultivation in the same field reduces the chance of residual spore survival from previous seasons.
A rotation period of at least two to three years is generally recommended for effective late blight management.
This practice also improves soil health and reduces the risk of other potato diseases and pests.',
        ],
        [
            'title' => 'Avoid Wet Conditions',
            'description' => 'Late blight thrives in prolonged wet and humid conditions, making proper water management essential for prevention.
Avoid using overhead irrigation during periods of high humidity, especially in the late afternoon or evening.
Drip or furrow irrigation methods keep foliage dry while supplying water to the roots, limiting disease spread.
Improving field drainage and increasing plant spacing further reduces moisture buildup and enhances airflow between plants.',
        ],
        [
            'title' => 'Certified Seed',
            'description' => 'Using certified, disease-free seed potatoes is one of the most reliable ways to prevent introducing late blight into a field.
Certified seed is produced under strict controls to minimize contamination with late blight or other pathogens.
Inspect seed potatoes before planting for signs of rot, discoloration, or abnormal growths, discarding any suspicious tubers.
Investing in high-quality seed reduces risks at the start of the season, setting the foundation for a successful potato crop.',
        ],
    ],
],

            [
    'name' => 'Raspberry___healthy',
    'origin_name' => 'Healthy Raspberry',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Raspberry']),
    'type_disease' => 'None',
    'description' => 'Healthy raspberry plants are characterized by vigorous growth, upright and sturdy canes, and abundant fruit production.
They typically exhibit dark green foliage with a slightly serrated edge, free from discoloration, wilting, or fungal spots.
With proper care, healthy raspberries produce sweet, juicy berries with bright coloration and uniform size.
Maintaining optimal conditions, including fertile soil, good irrigation, and regular pruning, ensures strong yields and plant vitality.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Leaves appear fresh, vibrant, and richly green, with no visible deformities, necrosis, or fungal markings.
There are no signs of curling, yellowing, or wilting that might suggest nutrient deficiencies or disease infections.
Branches (canes) remain firm and upright, supporting the weight of growing fruit clusters effectively throughout the season.
New growth emerges regularly, indicating healthy root activity and an overall balanced nutrient uptake by the plant.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Raspberry fruits are plump, brightly colored, and develop fully without cracks, blemishes, or rot.
Each drupelet on the berry forms properly, creating a firm, round structure that holds together during harvest.
The fruit is sweet and juicy, with a pleasant aroma and texture characteristic of premium-quality raspberries.
A consistent fruiting pattern over the season ensures a high yield, suitable for fresh consumption or preservation.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Pruning',
            'description' => 'Regular pruning of raspberry canes is essential for promoting airflow, encouraging new growth, and improving fruit quality.
Old, diseased, or damaged canes should be removed annually after the harvest to prevent overcrowding in the planting area.
By cutting back spent floricanes, the plant redirects its energy to the development of new primocanes for future fruiting.
Pruning also reduces the risk of fungal diseases by limiting shaded, damp areas within the plant canopy.',
        ],
        [
            'title' => 'Irrigation',
            'description' => 'Consistent watering is vital for raspberry plants, particularly during flowering and fruiting stages when moisture needs are highest.
Deep, infrequent watering encourages the development of deep roots, improving drought resistance and nutrient uptake.
Irrigation systems like drip lines or soaker hoses are recommended to minimize leaf wetness and reduce disease risks.
Ensuring plants receive about 2.5 cm (1 inch) of water per week during dry periods supports sustained, healthy growth.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Mulch',
            'description' => 'Applying organic mulch, such as straw, wood chips, or shredded leaves, around raspberry plants helps retain soil moisture.
Mulching suppresses weed growth, reduces evaporation from the soil surface, and moderates soil temperature fluctuations.
It also contributes to long-term soil improvement by breaking down and enriching the soil with organic matter over time.
Additionally, mulch creates a physical barrier between ripening fruit and soil pathogens, reducing the risk of disease contamination.',
        ],
        [
            'title' => 'Compost',
            'description' => 'Incorporating compost into the soil enhances its fertility by adding organic nutrients and beneficial microorganisms.
Compost improves soil texture, aiding in better drainage while enhancing its ability to retain essential moisture for the roots.
It promotes robust root growth, supporting stronger, more productive raspberry plants capable of resisting environmental stress.
A yearly top-dressing of compost around the base of the plants helps maintain optimal nutrient availability throughout the growing season.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Regularly inspecting raspberry plants allows early detection of any potential pest or disease problems.
Routine checks of leaves, stems, and fruit help gardeners intervene quickly to prevent minor issues from escalating.
Close observation during key growth stages, such as flowering and fruiting, ensures consistent plant health monitoring.
Keeping detailed records of inspections and maintenance activities supports better long-term crop management practices.',
        ],
        [
            'title' => 'Proper Spacing',
            'description' => 'Maintaining appropriate spacing between raspberry plants improves air circulation, which helps keep foliage dry and healthy.
Good airflow reduces the incidence of fungal diseases such as gray mold and anthracnose, which thrive in humid environments.
Proper spacing also ensures that each plant receives adequate sunlight, enhancing photosynthesis and overall growth performance.
Following recommended planting guidelines by variety allows plants to thrive while making garden maintenance easier throughout the season.',
        ],
    ],
],

            [
    'name' => 'Soybean___healthy',
    'origin_name' => 'Healthy Soybean',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Soybean']),
    'type_disease' => 'None',
    'description' => 'Healthy soybean plants are characterized by strong, upright stems and an even canopy of lush green foliage.
They demonstrate uniform growth, producing an abundance of pods filled with well-developed seeds ready for harvest.
With proper nutrient balance, irrigation, and pest management, soybean plants can achieve their maximum yield potential.
These plants play an essential role in sustainable agriculture by enriching soil nitrogen levels through symbiosis with nitrogen-fixing bacteria.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Leaves remain vibrant green and smooth, without the presence of discoloration, spots, or fungal lesions.
Foliage stays healthy and upright throughout the growing season, maintaining good plant architecture for sunlight absorption.
No curling, wilting, or necrotic patches are visible on leaves or stems, ensuring optimal photosynthesis capacity.
Healthy soybean plants exhibit balanced growth patterns across all parts, supporting long-term development of pods and seeds.',
        ],
        [
            'title' => 'Normal Pods',
            'description' => 'Soybean pods develop uniformly along the stem, filled with plump, firm seeds of consistent shape and color.
Pods are free of blemishes, insect damage, or fungal growth, indicating a healthy reproductive phase for the crop.
The seeds within these pods exhibit a firm texture, smooth coating, and proper nutrient accumulation for market or further planting.
Uniform pod filling across the plant signals that nutrient and moisture availability are adequate throughout the growing season.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fertilization',
            'description' => 'Applying nitrogen-fixing inoculants to soybean seeds before planting enhances symbiotic nitrogen fixation, promoting better growth.
Balanced fertilization with phosphorus and potassium supports strong root development and maximizes reproductive success.
Organic matter amendments or mineral fertilizers should be used based on soil testing to address any nutrient deficiencies.
Ensuring the availability of micronutrients such as molybdenum and sulfur further strengthens soybean growth and yield.',
        ],
        [
            'title' => 'Weed Control',
            'description' => 'Effective weed control strategies reduce competition for water, nutrients, and sunlight, boosting soybean plant health.
Using mechanical cultivation, mulching, or selective herbicides can help maintain a weed-free growing environment.
Weed competition during early growth stages can significantly reduce final soybean yields, making early intervention essential.
Regular field inspections for invasive weeds ensure that interventions are timely and that the soybean crop remains dominant.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost Tea',
            'description' => 'Compost tea, when applied to soybean fields, introduces beneficial microorganisms that enhance soil biodiversity and health.
The organic compounds in compost tea support improved nutrient uptake by plant roots, contributing to steady plant growth.
It also aids in disease suppression by fostering beneficial microbial competition in the rhizosphere, strengthening plant defenses.
Regular foliar sprays or soil drenches with compost tea can complement traditional fertilization programs for superior results.',
        ],
        [
            'title' => 'Manure',
            'description' => 'Well-rotted animal manure can be worked into the soil before planting to provide long-lasting organic nutrient sources.
Manure improves soil texture, promoting better drainage while enhancing the soil’s water-holding capacity in dry conditions.
The organic matter from manure stimulates microbial activity in the soil, enriching nutrient cycling for plant benefit.
Using composted manure reduces risks of introducing pathogens and provides a balanced, slow-release fertilizer effect for soybeans.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Frequent scouting of soybean fields allows for early detection of pests, diseases, or nutrient-related issues.
By observing plants throughout all growth stages, farmers can take corrective actions before problems severely impact yield.
Regular field visits during critical periods, such as flowering and pod filling, help maintain optimal plant health.
Good record-keeping of field observations improves decision-making for pest control, fertilization, and irrigation planning.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practicing crop rotation with non-legume crops reduces the buildup of pests and diseases specific to soybeans.
Rotating with cereals or grasses breaks pathogen life cycles in the soil, improving long-term field productivity.
It also helps balance soil nutrient levels by alternating nitrogen-fixing legumes with crops that utilize soil nitrogen stores.
Crop rotation contributes to overall soil health, supporting sustainable farming practices and improving yields over multiple seasons.',
        ],
    ],
],

            [
    'name' => 'Squash___Powdery_mildew',
    'origin_name' => 'Powdery Mildew',
    'scientific_name' => 'Erysiphe cichoracearum',
    'also_know_as' => json_encode(['Powdery Mildew']),
    'type_disease' => 'Fungal disease',
    'description' => 'Powdery mildew is a common fungal disease affecting squash plants, particularly in warm, dry environments. 
It appears as white, powdery fungal growth on leaves, stems, and sometimes fruit surfaces, disrupting plant functions.
The fungus reduces photosynthesis by blocking sunlight exposure, leading to weakened plant growth and lowered yields.
Without treatment, powdery mildew can cause premature defoliation, lower fruit quality, and expose the plant to secondary infections.',

    'symptoms' => [
        [
            'title' => 'Leaf Coating',
            'description' => 'The most recognizable symptom is the appearance of white, powdery patches on the surfaces of leaves.
These fungal patches can cover entire leaves over time, forming dense, dusty growths that reduce leaf efficiency.
Infected leaves may appear dull or pale beneath the fungal coating, signaling the start of plant stress.
The fungal coating usually starts on the lower or shaded leaves and progresses upward if untreated.',
        ],
        [
            'title' => 'Leaf Yellowing',
            'description' => 'As the infection progresses, affected leaves begin to yellow at the margins and between veins.
Yellowing is often accompanied by curling, distortion, and eventual necrosis of the infected leaf tissue.
The decline in photosynthetic activity weakens the plant, leading to stunted growth and reduced fruit development.
Premature leaf drop can leave fruits exposed to sunscald and reduce the plant’s ability to complete its life cycle.',
        ],
        [
            'title' => 'Reduced Fruit Quality',
            'description' => 'Fruits produced by infected squash plants are often smaller, misshapen, or unevenly colored.
Powdery mildew interferes with nutrient transport to the developing fruit, diminishing overall fruit quality and yield.
If infections persist throughout the fruiting stage, squash fruits may develop hard skins or poor taste.
Harvest losses can become significant, especially in prolonged outbreaks where fruit formation is delayed or stunted.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Fungicides containing sulfur, potassium bicarbonate, or myclobutanil can effectively control powdery mildew if applied early.
It’s important to begin treatments at the first visible signs of infection to prevent extensive disease spread.
Repeated applications may be necessary during humid or warm spells to maintain protection throughout the growing season.
Organic growers can opt for sulfur-based fungicides approved for organic farming as a safer alternative.',
        ],
        [
            'title' => 'Pruning',
            'description' => 'Pruning infected leaves improves air circulation within the squash canopy and slows the spread of fungal spores.
Carefully removing infected plant parts prevents fungal spores from spreading to healthy tissue and neighboring plants.
Sterilizing pruning tools between cuts reduces the risk of transmitting the pathogen from plant to plant.
Pruning also exposes inner foliage to more sunlight, making conditions less favorable for mildew proliferation.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Selecting mildew-resistant squash cultivars is one of the most effective long-term management strategies for powdery mildew.
Many modern squash varieties have been bred for increased resistance to common fungal pathogens like powdery mildew.
Using resistant cultivars reduces dependence on chemical treatments and improves crop resilience in susceptible areas.
Farmers should consult local agricultural extensions to determine the best resistant varieties suited for their climate.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Milk Spray',
            'description' => 'A homemade milk spray—one part milk to nine parts water—can reduce powdery mildew severity on squash leaves.
The enzymes and proteins in milk act as a natural fungicide, creating unfavorable conditions for fungal development.
Applying this solution weekly, especially after rain or irrigation, enhances plant resistance to fungal infection.
Milk sprays are most effective as a preventative or at the early stages of powdery mildew appearance.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'Baking soda (sodium bicarbonate) solutions can help alter the leaf surface pH, making it difficult for mildew to thrive.
A common mixture is one tablespoon of baking soda in one gallon of water, often with a few drops of liquid soap as a spreader.
This inexpensive remedy, when applied regularly, can slow or stop fungal development on young, susceptible plants.
While not a cure, baking soda sprays work well as part of an integrated management approach for powdery mildew.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Air Circulation',
            'description' => 'Proper plant spacing and strategic pruning ensure that squash plants receive adequate airflow throughout their canopies.
Good air circulation keeps leaf surfaces dry, discouraging the development and spread of powdery mildew spores.
Training vines and managing foliage structure reduce shading, allowing better light penetration for healthy growth.
Cultivating squash in rows aligned with prevailing winds can further enhance ventilation between plants.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Overhead watering can increase humidity around squash plants, creating an ideal environment for mildew outbreaks.
Using drip irrigation or soaker hoses delivers water directly to plant roots while keeping leaves dry.
By minimizing leaf wetness, plants are less vulnerable to fungal spore germination and infection cycles.
Watering should be done early in the day to allow any moisture on leaves to dry quickly by midday sun.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practicing crop rotation with non-cucurbit crops helps break the life cycle of powdery mildew pathogens.
By alternating plant families each growing season, growers reduce the build-up of fungal spores in the soil and surrounding area.
Rotating crops also promotes healthier soil biology, improving resistance to fungal diseases overall.
It’s advisable to wait at least one to two seasons before replanting cucurbit crops like squash in the same location.',
        ],
    ],
],

            [
    'name' => 'Strawberry___healthy',
    'origin_name' => 'Healthy Strawberry',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Strawberry']),
    'type_disease' => 'None',
    'description' => 'Healthy strawberry plants are characterized by lush green foliage, vigorous growth, and high yields of flavorful fruit. 
The leaves maintain a vibrant color and upright posture, free of blemishes or discolorations.
Berries produced by healthy plants are uniformly red, firm, and sweet, showing no signs of deformities or fungal infection.
Consistent care and favorable growing conditions ensure that plants thrive from flowering to harvest stages.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy strawberry leaves exhibit a bright green hue, firm texture, and smooth surface without any curling or yellowing. 
There are no visible fungal spots, insect damage, or signs of nutrient deficiencies such as chlorosis.
Stems remain upright and sturdy, supporting leaves and flower clusters effectively without drooping or wilting.
Vigorous leaf and runner growth is an excellent indicator of plant vitality and optimal development.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Strawberries produced by healthy plants are plump, fully red, and free from blemishes or irregular patches.
Fruits maintain a glossy appearance, with consistent ripening across the berry surface and a sweet, aromatic flavor.
There are no soft, mushy, or moldy spots present, and the fruit stem remains green and attached firmly.
High-quality strawberries have an appealing shape, full color development, and a firm but juicy texture.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Irrigation',
            'description' => 'Consistent, moderate watering is crucial for supporting healthy strawberry plant growth and fruit production.
Strawberries prefer evenly moist, well-drained soil; avoid waterlogging to prevent root rot and fungal issues.
It’s ideal to water early in the day, allowing moisture on leaves to dry before nightfall, reducing disease risk.
Drip irrigation or soaker hoses are recommended to deliver water directly to the root zone efficiently.',
        ],
        [
            'title' => 'Mulching',
            'description' => 'Applying straw mulch around strawberry plants conserves soil moisture and regulates soil temperature effectively.
Mulch helps prevent soil from splashing onto the fruit during watering or rainfall, keeping strawberries clean.
It also serves as a barrier against weeds, reducing competition for nutrients and space.
Additionally, organic mulch like straw gradually decomposes, improving soil texture and fertility over time.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost',
            'description' => 'Incorporating well-aged compost into strawberry beds enhances soil structure, water retention, and nutrient availability.
Compost supports beneficial microbial life in the soil, improving overall plant health and resilience to stress.
Regular compost applications throughout the growing season promote steady, balanced growth and stronger root systems.
This organic amendment not only feeds the plant but also enriches the surrounding ecosystem.',
        ],
        [
            'title' => 'Mulch',
            'description' => 'Using organic mulch, especially straw or dried leaves, helps maintain soil moisture during dry periods.
It creates a protective layer between the fruit and the soil, minimizing exposure to soil-borne pathogens.
Regularly replenishing the mulch prevents compaction and maintains its effectiveness throughout the season.
Mulching is one of the simplest yet most effective practices for producing clean, healthy strawberries at home.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Regular inspection of strawberry plants helps detect early signs of pests or diseases before they become severe.
Check both sides of the leaves and inspect flower clusters and developing fruits for any abnormalities.
By acting early on minor issues, growers can often prevent them from escalating into major problems.
Consistent monitoring also helps ensure optimal harvest timing, preventing overripeness or pest infestation.',
        ],
        [
            'title' => 'Proper Spacing',
            'description' => 'Proper spacing between plants encourages better airflow, reducing humidity buildup that can lead to fungal infections.
Good spacing allows each plant to access sufficient light and nutrients without competition from neighboring plants.
Overcrowded strawberry beds tend to harbor pests and create microclimates ideal for diseases like powdery mildew.
Adhering to recommended spacing guidelines improves fruit set, ripening uniformity, and overall plant health.',
        ],
    ],
],

            [
    'name' => 'Strawberry___Leaf_scorch',
    'origin_name' => 'Leaf Scorch',
    'scientific_name' => 'Diplocarpon earlianum',
    'also_know_as' => json_encode(['Leaf Scorch']),
    'type_disease' => 'Fungal disease',
    'description' => 'Leaf scorch is a fungal disease that significantly affects strawberry plants by attacking the foliage. 
It is caused by the pathogen Diplocarpon earlianum and is most prevalent in wet, humid conditions.
The disease diminishes the plant’s ability to photosynthesize efficiently, ultimately reducing plant vigor and fruit yield.
Without intervention, leaf scorch can devastate strawberry beds by weakening plants and lowering fruit quality.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Initial symptoms appear as small, purplish to dark brown spots scattered across the leaf surface.
As the disease progresses, these spots often enlarge and merge, forming larger patches of necrotic tissue.
The centers of these spots may dry out, giving the leaves a spotted, unhealthy appearance.
This early phase of infection can quickly lead to severe foliage damage if left untreated.',
        ],
        [
            'title' => 'Leaf Scorching',
            'description' => 'As the infection advances, entire portions of leaves may appear scorched, with dry, curled edges.
The leaf tissue between the veins dries up and turns brown, making the foliage look as though it’s been burned.
This scorched appearance is a key distinguishing characteristic of Diplocarpon earlianum infections.
Affected leaves typically die prematurely, reducing the plant’s ability to photosynthesize effectively.',
        ],
        [
            'title' => 'Reduced Vigor',
            'description' => 'Plants suffering from severe leaf scorch show reduced vigor, stunted growth, and fewer blossoms.
The weakening of the plant’s overall health leads to noticeably smaller, misshapen, or poor-quality fruit production.
In heavily infected plants, the yield may be dramatically reduced, compromising the profitability of the crop.
If leaf scorch persists year after year, entire strawberry beds may become unproductive.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Fungicides such as captan or myclobutanil should be applied preventatively or at the first sign of infection.
Multiple applications may be necessary during the growing season, particularly in wet weather conditions.
Always follow label instructions and rotate fungicides to minimize resistance development in fungal populations.
Effective fungicide use can significantly slow or halt the progression of leaf scorch in infected plants.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Good garden hygiene is critical in managing fungal diseases like leaf scorch in strawberries.
All infected leaves, stems, and plant debris should be removed and destroyed promptly to eliminate sources of spores.
Sanitizing garden tools between uses helps prevent spreading the disease from plant to plant.
Maintaining a clean, debris-free environment reduces the chance of disease reoccurrence in future seasons.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Whenever possible, choose strawberry varieties known to have resistance or tolerance to leaf scorch.
Cultivars bred for disease resistance reduce reliance on chemical treatments and offer more reliable harvests.
Examples of resistant varieties may vary by region, so consult local agricultural extension services for recommendations.
Planting resistant cultivars is a proactive step that can minimize future disease outbreaks in strawberry patches.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil acts as a natural fungicide and insect deterrent and can be applied to infected plants regularly.
Dilute neem oil according to package instructions and spray evenly on both leaf surfaces for maximum coverage.
In addition to controlling fungal spread, neem oil improves leaf appearance by creating a protective barrier.
It is safe for use in home gardens and provides a gentle but effective approach to fungal management.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'A homemade fungicide can be created by mixing baking soda with water and a small amount of dish soap.
Spraying this solution on infected foliage can create an alkaline surface, making it harder for the fungus to grow.
Apply regularly, especially after rainfall, to maintain protective coverage against further fungal development.
While not a complete cure, baking soda treatments can help reduce the spread and severity of leaf scorch symptoms.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Air Circulation',
            'description' => 'Ensuring good airflow around strawberry plants is one of the most important strategies for preventing leaf scorch.
Prune overcrowded runners, remove weeds, and maintain recommended spacing between plants to improve ventilation.
Improved airflow helps dry the foliage quickly after rain or irrigation, discouraging fungal development.
This simple practice dramatically reduces the environmental conditions favorable to fungal growth.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Drip irrigation or soaker hoses are preferred for strawberry cultivation because they keep leaves dry.
Overhead watering, particularly late in the day, creates damp conditions on foliage that promote fungal infections.
Keeping water confined to the root zone not only conserves water but also protects the plants from disease.
Implementing this watering method greatly decreases the incidence of leaf scorch and other foliar diseases.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practicing crop rotation breaks the disease cycle by depriving the pathogen of its strawberry host for several seasons.
Rotate strawberry plantings with unrelated crops such as beans or corn to help reduce fungal inoculum in the soil.
Avoid planting strawberries in the same bed year after year without rotation to minimize disease carryover.
This cultural practice complements other preventive methods and is especially important for long-term disease control.',
        ],
    ],
],

            [
    'name' => 'Tomato___Bacterial_spot',
    'origin_name' => 'Bacterial Spot',
    'scientific_name' => 'Xanthomonas campestris pv. vesicatoria',
    'also_know_as' => json_encode(['Bacterial Spot']),
    'type_disease' => 'Bacterial disease',
    'description' => 'Bacterial spot in tomatoes is a destructive disease caused by Xanthomonas bacteria. 
It primarily affects the leaves and fruit, leading to significant yield loss if left unmanaged. 
The bacteria thrive in warm, wet conditions, making greenhouse and tropical settings particularly vulnerable. 
Severe infections can defoliate plants, leaving fruits exposed to sunscald and secondary infections.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Early symptoms appear as small, water-soaked spots on the underside of leaves. 
As the disease progresses, these spots enlarge, turn dark brown to black, and may be surrounded by yellow halos. 
Severe infections lead to coalescing spots, giving leaves a scorched or ragged appearance. 
Damaged foliage reduces the plant’s ability to photosynthesize effectively.',
        ],
        [
            'title' => 'Fruit Spots',
            'description' => 'Fruits develop small, raised, and scabby dark spots that may have a greasy appearance. 
These spots can make the fruit unmarketable and significantly reduce its commercial value. 
In severe cases, lesions may crack or develop secondary fungal infections. 
Affected fruits may remain small or develop uneven ripening.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'As the infection spreads, entire leaves can yellow and prematurely fall off the plant. 
This defoliation weakens the tomato plant, exposing fruits to sun damage and halting further growth. 
In commercial fields, widespread leaf drop results in reduced harvest quantities. 
Combined with fruit blemishes, this leads to substantial economic losses.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Bactericide Application',
            'description' => 'Apply copper-based bactericides or copper-mancozeb mixtures at the first signs of infection. 
These treatments can help slow bacterial multiplication and limit spread. 
Regular applications every 7–10 days are often necessary during wet weather. 
Always follow recommended rates to avoid phytotoxicity on young plants.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotate tomatoes with non-solanaceous crops like cereals or legumes for at least two years. 
This practice helps break the disease cycle by depriving the bacteria of suitable host plants. 
Avoid planting tomatoes in the same location year after year. 
Proper rotation is a critical element of integrated disease management strategies.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Carefully remove and destroy any plant material showing disease symptoms. 
Never compost infected debris, as the bacteria can persist in plant residues. 
Thoroughly disinfect tools and machinery used in affected fields. 
Maintain cleanliness in greenhouses and surrounding environments to limit sources of infection.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Garlic Spray',
            'description' => 'Garlic has natural antibacterial properties that can help suppress bacterial spot. 
Prepare a spray by blending garlic cloves with water, straining the mixture, and applying it weekly. 
This organic approach may not cure infections but can help reduce bacterial load. 
Garlic sprays are safe for the environment and beneficial insects.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'Mix one tablespoon of baking soda with a liter of water and a small amount of liquid soap. 
This alkaline solution can make leaf surfaces less hospitable to bacteria. 
Regular spraying during humid weather may help prevent disease outbreaks. 
While not a cure, it is a safe and inexpensive supplemental treatment.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Resistant Varieties',
            'description' => 'Select tomato cultivars that have documented resistance or tolerance to bacterial spot. 
Consult local agricultural agencies for recommended resistant varieties for your region. 
Using resistant cultivars significantly reduces the likelihood of serious infections. 
Combine resistant varieties with cultural practices for best results.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Use drip irrigation or soaker hoses instead of overhead sprinklers. 
Wet leaf surfaces promote bacterial multiplication and splashing spreads the infection. 
Water plants early in the day so that foliage dries quickly. 
Maintaining dry foliage is key in managing bacterial diseases.',
        ],
        [
            'title' => 'Seed Treatment',
            'description' => 'Always plant certified, pathogen-free tomato seeds or treat seeds with hot water before planting. 
Hot water treatment involves soaking seeds at 50°C (122°F) for 25 minutes to kill bacterial pathogens. 
Using disease-free seeds is a critical preventive measure, especially for commercial production. 
Combine seed treatment with field hygiene for optimal results.',
        ],
    ],
],

            [
    'name' => 'Tomato___Early_blight',
    'origin_name' => 'Early Blight',
    'scientific_name' => 'Alternaria solani',
    'also_know_as' => json_encode(['Early Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Early blight is a common and damaging fungal disease of tomatoes, caused by Alternaria solani. 
It typically starts on older, lower leaves and gradually spreads upward through the plant. 
The fungus thrives in warm, humid environments, especially after rainfall or overhead irrigation. 
If left untreated, early blight can cause significant yield losses and reduced fruit quality.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'Initial symptoms appear as small, dark brown spots on the lower, older leaves of the tomato plant. 
These spots gradually expand and develop concentric rings, giving them a "target-like" appearance. 
Surrounding tissue often turns yellow, and as the disease progresses, the entire leaf may die. 
Severe defoliation can expose fruits to sunscald and reduce overall plant health.',
        ],
        [
            'title' => 'Stem Lesions',
            'description' => 'Lesions can develop on the stems, especially near the soil line or at pruning wounds. 
These appear as elongated, dark brown or black areas with characteristic concentric patterns. 
Stem infections can girdle the stem, leading to wilting or plant collapse. 
Young transplants are particularly vulnerable to stem damage caused by early blight.',
        ],
        [
            'title' => 'Fruit Rot',
            'description' => 'Dark, sunken lesions can form on green or ripening fruits, typically near the stem attachment point. 
These lesions may enlarge, developing concentric rings similar to leaf symptoms. 
As the infection spreads, the fruits may crack, become distorted, or develop soft rot due to secondary infections. 
Severely affected fruits become unmarketable and contribute to crop losses.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Apply preventive fungicides such as chlorothalonil, mancozeb, or copper-based products at the early stages of growth. 
For effective control, begin applications before symptoms appear or at the first signs of infection. 
Fungicide sprays should be repeated every 7 to 14 days, especially during wet or humid periods. 
Rotate fungicides with different modes of action to prevent the development of resistant fungal strains.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practice crop rotation by avoiding planting tomatoes or other solanaceous crops like potatoes and eggplants in the same soil for at least two to three years. 
Alternating with non-host crops like corn or beans reduces the buildup of fungal spores in the soil. 
Crop rotation disrupts the disease cycle and minimizes the risk of recurring infections. 
Integrate this practice with other cultural methods for optimal disease control.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Regularly remove and destroy infected leaves, stems, and fruit from the garden or field. 
Avoid composting infected plant materials, as the fungus can survive on debris and re-infect future crops. 
After harvest, plow under or remove plant residues to minimize overwintering fungal spores. 
Clean gardening tools and equipment with disinfectants to prevent cross-contamination between healthy and infected plants.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil is a natural fungicide with antifungal and insecticidal properties that can help suppress early blight. 
Mix neem oil with water and a few drops of mild liquid soap as an emulsifier, then spray evenly on the foliage. 
Repeat applications every 7 to 10 days, especially after rainfall or irrigation. 
Although neem oil may not completely eliminate infections, it works well as a preventive organic solution.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'A homemade baking soda spray can create an unfavorable environment for fungal growth. 
Mix one tablespoon of baking soda with one liter of water and add a few drops of liquid soap to help the solution stick to leaves. 
Spray the mixture on the upper and lower leaf surfaces every 7–10 days. 
While not a cure, this approach may help reduce the severity and spread of the disease when combined with other management practices.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Proper Spacing',
            'description' => 'Space tomato plants adequately apart to promote good airflow and reduce humidity around foliage. 
Improved air circulation allows leaves to dry faster, making conditions less favorable for fungal growth. 
Avoid overcrowding plants, especially in home gardens or greenhouses. 
Combined with pruning and staking, proper spacing is a foundational step in disease prevention.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Water at the base of plants using drip irrigation or soaker hoses to keep foliage dry. 
Overhead watering splashes fungal spores onto leaves and promotes the spread of early blight. 
Water early in the morning if necessary, giving leaves time to dry before nightfall. 
Controlling moisture on foliage significantly reduces the likelihood of fungal infections.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Whenever possible, choose tomato cultivars that show resistance or tolerance to early blight. 
Consult local agricultural extension services or seed suppliers for recommended varieties suitable for your region. 
Resistant cultivars won’t eliminate disease risks entirely but can reduce the severity of infections. 
Combining resistant varieties with cultural controls and fungicides provides the best protection against early blight.',
        ],
    ],
],

            [
    'name' => 'Tomato___healthy',
    'origin_name' => 'Healthy Tomato',
    'scientific_name' => 'None',
    'also_know_as' => json_encode(['Healthy Tomato']),
    'type_disease' => 'None',
    'description' => 'Healthy tomato plants exhibit vigorous, upright growth with vibrant green foliage and consistent flowering. 
They develop sturdy stems, well-formed leaves, and produce clusters of flavorful, colorful tomatoes. 
With adequate care and favorable conditions, healthy plants can yield abundant harvests over the growing season. 
Proper cultural practices such as watering, fertilizing, and pruning contribute significantly to sustaining plant health.',

    'symptoms' => [
        [
            'title' => 'No Disease Symptoms',
            'description' => 'Healthy tomato leaves are a rich, medium to dark green without any discoloration, spotting, or curling. 
The leaves should appear fully expanded with no signs of yellowing or necrosis. 
There is no presence of fungal, bacterial, or viral infections, ensuring the plants continue growing efficiently. 
New growth emerges regularly, signifying a thriving and productive tomato plant.',
        ],
        [
            'title' => 'Normal Fruit',
            'description' => 'Tomatoes produced by healthy plants are firm to the touch and evenly colored, depending on variety. 
They lack deformities such as cracking, uneven ripening, or sunken spots, which often indicate disease or nutrient problems. 
Healthy fruit also maintains a consistent texture with no blemishes, soft areas, or signs of rot. 
When harvested at the right time, these tomatoes exhibit full flavor and nutritional value.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Staking',
            'description' => 'Provide support for tomato plants by using stakes, cages, or trellises to prevent the stems from sprawling on the ground. 
Staking improves air circulation around the leaves, reducing the risk of fungal infections. 
It also keeps the fruit off the soil, helping maintain its cleanliness and minimizing pest damage. 
Proper support structures ensure plants can grow vertically, maximizing space and improving harvests.',
        ],
        [
            'title' => 'Fertilization',
            'description' => 'Fertilize tomato plants regularly with a balanced fertilizer containing nitrogen, phosphorus, and potassium. 
Apply fertilizer during key growth stages such as transplanting, flowering, and fruit development. 
Using organic amendments like compost or well-rotted manure further enhances soil fertility. 
Balanced nutrition encourages healthy leaf growth, robust root systems, and high-quality fruit production.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Compost Tea',
            'description' => 'Compost tea is a natural, nutrient-rich liquid that boosts soil health and beneficial microbial activity. 
To prepare, steep finished compost in water for 24–48 hours, then strain and apply to the soil or as a foliar spray. 
Regular use strengthens plant immunity, promotes root development, and improves resistance to minor pests and diseases. 
This organic supplement complements a holistic approach to sustainable gardening.',
        ],
        [
            'title' => 'Mulch',
            'description' => 'Applying mulch, such as straw, shredded leaves, or wood chips, around the base of tomato plants helps retain soil moisture. 
It also moderates soil temperature, suppresses weed growth, and prevents soil from splashing onto lower leaves during watering or rainfall. 
Mulching enhances the overall health of tomato plants by conserving resources and reducing environmental stress. 
Organic mulches also gradually break down, adding valuable organic matter to the soil.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Monitoring',
            'description' => 'Conduct regular inspections of tomato plants to identify early signs of pests, diseases, or nutrient deficiencies. 
Early detection allows for timely intervention before problems escalate and affect the entire crop. 
Pay attention to leaf color, fruit appearance, and any abnormalities on stems or flowers. 
Proactive monitoring is essential for maintaining consistently healthy tomato plants throughout the season.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practice crop rotation by avoiding planting tomatoes or related crops like peppers, potatoes, or eggplants in the same soil each year. 
Rotating with unrelated plants such as legumes, corn, or leafy greens interrupts the life cycles of soilborne pathogens and pests. 
This strategy helps maintain soil fertility and reduces the risk of recurring diseases in tomato crops. 
Effective crop rotation is a fundamental component of sustainable vegetable gardening practices.',
        ],
    ],
],

            [
    'name' => 'Tomato___Late_blight',
    'origin_name' => 'Late Blight',
    'scientific_name' => 'Phytophthora infestans',
    'also_know_as' => json_encode(['Late Blight']),
    'type_disease' => 'Fungal disease',
    'description' => 'Late blight is a devastating fungal disease that primarily affects tomatoes and potatoes, often causing rapid crop loss during cool, wet conditions. 
It is responsible for the infamous Irish Potato Famine and remains one of the most destructive plant diseases in agriculture. 
The fungus spreads through spores that can travel long distances by wind or water splashes. 
If not controlled promptly, late blight can destroy entire tomato crops within days, especially during prolonged rainy periods.',

    'symptoms' => [
        [
            'title' => 'Leaf Lesions',
            'description' => 'The initial symptoms appear as small, irregular, water-soaked spots on older leaves. 
These lesions quickly enlarge, turning brown or black, often surrounded by a pale green or yellow margin. 
In humid conditions, a characteristic white, fuzzy fungal growth develops on the undersides of affected leaves. 
As the disease progresses, large portions of the foliage can become necrotic and collapse.',
        ],
        [
            'title' => 'Fruit Rot',
            'description' => 'Infected tomatoes display dark, greasy-looking patches that rapidly expand and soften the fruit tissue. 
These areas often appear sunken and may exhibit a brown or grayish hue with firm edges. 
Affected fruits may develop secondary infections, accelerating decay and rendering them inedible. 
If not removed, diseased fruit can become a source of new infections, spreading spores throughout the garden or farm.',
        ],
        [
            'title' => 'Stem Lesions',
            'description' => 'Dark, elongated lesions can form on stems and petioles, weakening plant structure significantly. 
The lesions may girdle the stem, cutting off nutrient and water flow, which causes wilting of entire branches. 
Affected stems sometimes display a greasy texture, further weakening plant stability and increasing risk of collapse. 
This systemic infection reduces fruit development and severely compromises plant productivity.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Apply protective fungicides such as chlorothalonil or systemic fungicides like metalaxyl during periods of wet or humid weather. 
Start applications before symptoms appear if conditions are favorable for the disease, particularly in regions prone to outbreaks. 
Reapply fungicides every 7 to 10 days or after heavy rainfall to maintain protection. 
Use products labeled for late blight control, and rotate between different fungicide classes to prevent resistance development.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Immediately remove and destroy any infected plants or plant debris to prevent the spread of spores to healthy plants. 
Do not compost diseased material, as the fungus can survive and infect future crops. 
Clean gardening tools and equipment with disinfectants to eliminate potential fungal contamination. 
Practicing good sanitation significantly reduces the likelihood of recurring infections in subsequent growing seasons.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'Whenever possible, select tomato cultivars that have been bred for resistance to late blight. 
Although no variety is entirely immune, resistant types delay the onset of infection and slow disease progression. 
Check seed catalogs or local agricultural extensions for region-appropriate resistant tomato varieties. 
Combining resistant varieties with cultural controls offers the best strategy for managing late blight effectively.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Copper Spray',
            'description' => 'Copper-based fungicides, such as Bordeaux mixture, can be used as an organic option to help suppress late blight. 
Mix according to package instructions and apply thoroughly to leaves, stems, and fruit before infections develop. 
Reapply regularly during rainy or humid periods to maintain coverage on the foliage. 
Copper sprays are most effective as preventative treatments rather than cures for active infections.',
        ],
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil acts as a natural antifungal and can help reduce the spread of early-stage late blight. 
Dilute neem oil according to product directions and apply as a foliar spray, ensuring complete coverage. 
It provides the added benefit of repelling certain pests, reducing plant stress, and improving overall plant resilience. 
While not a standalone solution for severe cases, neem oil complements integrated disease management strategies.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Avoid Wet Conditions',
            'description' => 'To minimize disease development, avoid overhead irrigation, which can keep foliage damp for extended periods. 
Instead, utilize drip irrigation systems or water directly at the plant’s base to reduce leaf moisture. 
Improve drainage around plants by amending soil with organic matter or raised beds. 
Avoid planting tomatoes in low-lying or poorly drained areas where water tends to accumulate after rainfall.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Rotate tomato crops with unrelated plant families such as corn, lettuce, or beans to break the life cycle of the pathogen. 
Avoid planting tomatoes, potatoes, or other solanaceous crops in the same area for at least 2–3 years. 
Crop rotation prevents the buildup of fungal spores in the soil, reducing the risk of reinfection. 
It is one of the most effective long-term strategies for managing late blight in vegetable gardens.',
        ],
        [
            'title' => 'Certified Seed',
            'description' => 'Always purchase certified disease-free seeds or transplants from reputable suppliers to reduce the risk of introducing late blight into your garden. 
Avoid using saved seed from previous crops unless it has been properly cleaned and verified healthy. 
Planting certified, disease-free stock is an essential preventive measure, particularly in regions with a history of late blight outbreaks. 
Inspect transplants before planting to ensure they are free of any visible lesions or abnormalities.',
        ],
    ],
],

            [
    'name' => 'Tomato___Leaf_Mold',
    'origin_name' => 'Leaf Mold',
    'scientific_name' => 'Passalora fulva',
    'also_know_as' => json_encode(['Leaf Mold']),
    'type_disease' => 'Fungal disease',
    'description' => 'Leaf mold is a fungal disease that primarily affects tomatoes grown in humid environments, particularly in greenhouses or poorly ventilated areas. 
It is characterized by distinctive yellow spots on the upper leaf surfaces and velvety mold growth on the undersides. 
If left unchecked, leaf mold can significantly reduce photosynthesis, weaken the plant, and drastically cut fruit production. 
While generally not fatal, it can lead to substantial yield losses and poor fruit quality when severe.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'The first visible sign of leaf mold is the appearance of pale green or yellow spots on the upper surfaces of older leaves. 
As the infection progresses, these spots enlarge and may merge, giving the leaf a blotchy appearance. 
The affected areas eventually dry out and turn brown as the tissue dies. 
These discolorations disrupt the plant’s ability to photosynthesize, weakening the overall health of the tomato plant.',
        ],
        [
            'title' => 'Mold Growth',
            'description' => 'On the undersides of the infected leaves, a velvety, grayish-purple to olive-green mold becomes visible, especially in humid conditions. 
This mold consists of fungal spores responsible for spreading the disease to neighboring plants. 
High humidity or condensation on the leaves promotes the rapid development of this characteristic fungal layer. 
Once visible, it signals that the disease has become well-established and requires immediate intervention.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'As the infection worsens, the affected leaves gradually yellow, curl, and eventually drop from the plant. 
Premature leaf drop leads to reduced energy production due to lower photosynthesis capacity. 
The loss of healthy foliage stresses the plant, resulting in smaller, fewer, or poor-quality tomatoes. 
Leaf drop also exposes fruit to direct sunlight, increasing the risk of sunscald and further reducing harvest quality.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Apply protective fungicides such as chlorothalonil or copper-based products at the first signs of leaf mold. 
These fungicides should be used regularly in humid environments or areas with a history of leaf mold outbreaks. 
It is crucial to apply the fungicide to both upper and lower leaf surfaces for maximum effectiveness. 
Follow label instructions regarding reapplication intervals and safety measures for edible crops like tomatoes.',
        ],
        [
            'title' => 'Ventilation',
            'description' => 'Increase air circulation around tomato plants by spacing them adequately and pruning lower foliage. 
In greenhouses, use fans or open vents to lower humidity and reduce condensation on leaves. 
Good airflow minimizes moisture buildup, making conditions less favorable for fungal development. 
Proper ventilation is one of the most effective cultural practices for reducing the severity of leaf mold in enclosed spaces.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Regularly inspect tomato plants for infected leaves and promptly remove any showing symptoms of mold. 
Dispose of infected plant material far from the growing area to prevent the spread of fungal spores. 
At the end of the growing season, thoroughly clean up all plant debris and disinfect any garden tools or greenhouse surfaces. 
Maintaining strict sanitation practices will help break the disease cycle and prevent future outbreaks.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Milk Spray',
            'description' => 'Mix 1 part milk with 9 parts water and apply as a foliar spray to both upper and lower leaf surfaces weekly. 
Milk proteins may have antifungal properties that help inhibit the development of leaf mold spores. 
Application is most effective as a preventative measure or during the early stages of infection. 
Ensure thorough coverage of all plant parts for optimal protection and repeat applications as needed, especially after rain.',
        ],
        [
            'title' => 'Baking Soda',
            'description' => 'Prepare a solution by mixing 1 tablespoon of baking soda with 1 liter of water, optionally adding a few drops of liquid soap as a spreader. 
Baking soda alters the pH on leaf surfaces, making conditions less favorable for fungal growth. 
Apply weekly during humid conditions to help suppress the development of fungal colonies. 
While not a standalone treatment for severe infections, baking soda spray complements other control methods in integrated management.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Reduce Humidity',
            'description' => 'Maintain relative humidity below 85% whenever possible, especially in greenhouse environments. 
Ventilate growing areas, avoid overcrowding, and open vents or use exhaust fans during periods of high moisture. 
Avoid dense planting arrangements that restrict airflow between plants. 
Reducing humidity greatly limits the conditions favorable for fungal spore germination and infection.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Instead of watering plants from above, use drip irrigation or soaker hoses to deliver moisture directly to the soil. 
Keeping foliage dry is essential for preventing fungal infections like leaf mold. 
If overhead watering is necessary, do it early in the day so that leaves have time to dry before nightfall. 
Wet leaves, combined with poor ventilation, are the primary contributors to leaf mold outbreaks.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'When available, choose tomato cultivars bred for resistance to leaf mold, particularly if growing in a greenhouse. 
Many modern hybrid varieties list resistance to specific races of Passalora fulva, the causal agent of leaf mold. 
Using resistant varieties reduces disease pressure and complements other preventative measures. 
Combining resistant plants with good cultural practices creates a strong defense against the disease.',
        ],
    ],
],

            [
    'name' => 'Tomato___Septoria_leaf_spot',
    'origin_name' => 'Septoria Leaf Spot',
    'scientific_name' => 'Septoria lycopersici',
    'also_know_as' => json_encode(['Septoria Leaf Spot']),
    'type_disease' => 'Fungal disease',
    'description' => 'Septoria leaf spot is a fungal disease that primarily targets the foliage of tomato plants, 
leading to premature defoliation and overall reduction in plant vigor. 
It thrives in warm, wet conditions, particularly when plants are densely packed or overhead watering is used. 
Without intervention, Septoria leaf spot can drastically reduce fruit yield by weakening the plant before the fruit matures.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'The disease first appears as small, circular spots with dark brown to black margins and grayish-white centers. 
These spots often have a distinct yellow halo surrounding them, especially on older, lower leaves. 
As the infection spreads, the number and size of spots increase, causing significant leaf damage. 
In humid conditions, fungal fruiting bodies (tiny black dots) may become visible in the center of the spots.',
        ],
        [
            'title' => 'Leaf Yellowing',
            'description' => 'The tissue surrounding infected spots starts to yellow as the leaf loses functionality. 
As spots multiply, entire leaves may turn yellow before drying up and falling from the plant. 
This progressive yellowing weakens the plant’s ability to photosynthesize efficiently. 
If left untreated, it often results in early defoliation, leaving fruits exposed to direct sunlight and sunscald.',
        ],
        [
            'title' => 'Reduced Photosynthesis',
            'description' => 'Premature defoliation caused by Septoria leaf spot dramatically reduces the plant’s capacity for photosynthesis. 
Without healthy leaves, the plant produces less energy to support the development of flowers and fruit. 
Lower fruit yield, smaller tomatoes, and reduced overall harvest are common outcomes of severe infections. 
Additionally, exposed fruit is more susceptible to sun damage and other secondary infections.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Begin fungicide treatments such as chlorothalonil or mancozeb as soon as symptoms appear, ideally before spots become widespread. 
Consistent applications every 7 to 10 days during wet periods help prevent further fungal development. 
Be sure to coat both the upper and lower leaf surfaces for full protection. 
Follow product label instructions carefully to avoid crop damage and adhere to harvest safety intervals.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Implement crop rotation by growing tomatoes in a different location each year, away from solanaceous plants like potatoes or peppers. 
Fungi responsible for Septoria can survive on plant debris in the soil, leading to recurring outbreaks if not rotated. 
Allow at least two to three years before replanting tomatoes in the same location. 
Rotating crops disrupts the fungal life cycle, significantly reducing the risk of future infections.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Remove and dispose of all infected leaves and plant debris both during the growing season and at season’s end. 
Do not compost infected material, as this can reintroduce the fungus to future crops. 
Disinfect gardening tools after use to prevent unintentional disease spread between plants. 
Strict sanitation, combined with fungicide use, forms a powerful strategy to break the disease cycle.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil Spray',
            'description' => 'Neem oil serves as a natural fungicide that can help slow the progression of Septoria leaf spot. 
Mix neem oil with water as recommended on the product label and apply thoroughly to affected and surrounding foliage. 
Neem also provides mild insect-repellent properties, giving additional benefits in pest management. 
Regular applications are needed during humid periods for effective fungal suppression.',
        ],
        [
            'title' => 'Baking Soda Solution',
            'description' => 'Prepare a baking soda spray by combining 1 tablespoon of baking soda with 1 liter of water and a few drops of liquid soap as a spreader. 
Baking soda raises the pH on the leaf surface, creating unfavorable conditions for fungal growth. 
Apply weekly to help control the spread of the disease in its early stages. 
While it works well as part of an integrated strategy, severe infections may require chemical fungicides in addition.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Proper Plant Spacing',
            'description' => 'When planting tomatoes, provide ample space between plants to ensure good airflow through the foliage. 
Adequate spacing helps keep leaf surfaces dry and reduces the duration of leaf wetness after rainfall or irrigation. 
Avoid planting tomatoes too close to fences or walls that block airflow. 
Good spacing is a foundational step in preventing Septoria and other fungal diseases.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Whenever possible, avoid overhead irrigation that wets the foliage and creates ideal conditions for fungal growth. 
Drip irrigation or soaker hoses deliver water directly to the soil, keeping leaves dry. 
If overhead watering is necessary, perform it in the early morning to allow leaves to dry quickly in the sun. 
Limiting wet foliage is one of the most effective cultural practices to combat fungal infections.',
        ],
        [
            'title' => 'Stake Plants',
            'description' => 'Support tomato plants using stakes, cages, or trellises to keep foliage off the ground and improve air circulation. 
Keeping leaves away from the soil reduces exposure to fungal spores that might splash up during rain or watering. 
Staking also makes it easier to inspect and manage plants for signs of disease. 
Combined with mulching and sanitation, staking significantly reduces the risk of Septoria outbreaks.',
        ],
    ],
],

            [
    'name' => 'Tomato___Spider_mites_Two-spotted_spider_mite',
    'origin_name' => 'Two-Spotted Spider Mite',
    'scientific_name' => 'Tetranychus urticae',
    'also_know_as' => json_encode(['Two-Spotted Spider Mite']),
    'type_disease' => 'Pest infestation',
    'description' => 'Two-spotted spider mites are tiny arachnid pests that can severely impact tomato plants by feeding on plant cells. 
They use their piercing mouthparts to suck sap, leaving behind tiny discolored spots on the foliage. 
Infestations can escalate quickly, particularly in hot, dry environments where their reproduction rate increases. 
If left uncontrolled, spider mites can lead to defoliation, weakened plants, and significantly reduced fruit yields.',

    'symptoms' => [
        [
            'title' => 'Leaf Stippling',
            'description' => 'Early signs of infestation appear as fine yellow or silvery stippling, often on the upper leaf surface. 
This stippling is the result of spider mites feeding on plant cells and sucking out the contents. 
As feeding progresses, these small spots may coalesce, giving the leaves a faded, speckled appearance. 
Heavy stippling reduces the plant’s ability to photosynthesize efficiently, leading to weakened growth.',
        ],
        [
            'title' => 'Webbing',
            'description' => 'One of the more distinctive indicators of a serious spider mite infestation is the presence of fine, silky webbing. 
This webbing is typically found on the undersides of leaves and can extend across stems and branches. 
The webs protect the mites from predators and environmental hazards while they continue to feed and multiply. 
Dense webbing combined with visible mite clusters signals a rapidly escalating infestation requiring immediate action.',
        ],
        [
            'title' => 'Leaf Yellowing',
            'description' => 'As mite feeding intensifies, entire leaves may begin turning yellow or bronze. 
This discoloration occurs as a result of cellular damage and chlorophyll loss caused by repeated feeding. 
Affected leaves often dry out, curl, and eventually fall from the plant, further stressing the tomato plant. 
Severe infestations can lead to defoliation, stunted growth, and lower overall fruit production.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Miticide Application',
            'description' => 'For heavy infestations, applying targeted miticides such as abamectin, spiromesifen, or insecticidal soaps can help control mite populations. 
Be sure to thoroughly cover both the upper and lower leaf surfaces, where mites hide and feed. 
Follow product label instructions to avoid harming beneficial insects or causing phytotoxicity. 
Regular reapplication may be required depending on mite severity and environmental conditions.',
        ],
        [
            'title' => 'Biological Control',
            'description' => 'Encourage or introduce natural enemies of spider mites, such as predatory mites like Phytoseiulus persimilis. 
These predatory mites feed exclusively on spider mites, providing a sustainable and eco-friendly form of pest control. 
Biological control works best when introduced early before populations become overwhelming. 
Avoid broad-spectrum insecticides that might kill these helpful predators and disrupt ecological balance.',
        ],
        [
            'title' => 'Water Spray',
            'description' => 'Regularly spraying tomato plants with a strong jet of water can help physically remove spider mites from the foliage. 
Focus particularly on the undersides of leaves where mites congregate. 
While this method alone may not completely eradicate infestations, it reduces populations significantly when combined with other methods. 
Spraying with water also helps wash away webs and dust that might shield mites from chemical treatments.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Soap Spray',
            'description' => 'Mix 1 to 2 tablespoons of mild liquid dish soap in 1 liter of water to create a simple yet effective soap spray. 
Spray the solution liberally on the entire plant, especially focusing on the undersides of leaves. 
The soap disrupts the mites’ protective outer layer, leading to desiccation and death. 
Repeat applications every few days may be necessary until mite populations are controlled.',
        ],
        [
            'title' => 'Garlic Oil Spray',
            'description' => 'Prepare garlic oil spray by mixing crushed garlic with vegetable oil, straining, and diluting it with water before spraying on affected plants. 
The strong odor and compounds in garlic serve as a natural repellent to spider mites. 
While garlic spray may not completely eliminate an established infestation, it helps deter further colonization. 
Combine with other management practices for improved effectiveness and longer-lasting results.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Maintain Humidity',
            'description' => 'Spider mites thrive in hot, dry environments, so increasing humidity levels around tomato plants can discourage their proliferation. 
Use humidifiers in greenhouses or regularly mist plants with water, focusing on creating an environment less favorable to mites. 
Maintaining soil moisture through mulching can also help moderate humidity at the plant’s base. 
Avoid letting soil dry out excessively, as stressed plants are more susceptible to mite attacks.',
        ],
        [
            'title' => 'Regular Monitoring',
            'description' => 'Inspect tomato plants regularly, paying special attention to the undersides of leaves for early signs of spider mite activity. 
Using a hand lens can help detect tiny mites before visible symptoms appear. 
Early detection allows for rapid intervention, preventing large outbreaks that can severely damage crops. 
In greenhouses or gardens with a history of mite problems, weekly checks are highly recommended.',
        ],
        [
            'title' => 'Remove Infested Leaves',
            'description' => 'Carefully remove and dispose of heavily infested leaves or branches from the garden or greenhouse. 
Removing infested parts physically reduces the mite population and prevents the spread to other parts of the plant. 
Dispose of infested material away from the growing area or by burning, if permitted. 
Sanitizing tools used for pruning can prevent unintentional transfer of mites to healthy plants.',
        ],
    ],
],

            [
    'name' => 'Tomato___Target_Spot',
    'origin_name' => 'Target Spot',
    'scientific_name' => 'Corynespora cassiicola',
    'also_know_as' => json_encode(['Target Spot']),
    'type_disease' => 'Fungal disease',
    'description' => 'Target spot is a destructive fungal disease of tomato plants, caused by Corynespora cassiicola. 
It primarily affects the leaves and fruits, forming distinctive dark spots with concentric rings resembling targets. 
As the disease progresses, the infected foliage weakens, leading to defoliation and exposing fruits to sunburn. 
The disease thrives in warm, humid environments, making it a common problem in greenhouse and outdoor tomato cultivation.',

    'symptoms' => [
        [
            'title' => 'Leaf Spots',
            'description' => 'The most identifiable symptom of target spot is the appearance of dark brown spots with concentric rings, giving them a target-like appearance. 
These spots usually begin on older leaves at the lower parts of the plant and gradually move upward. 
As spots enlarge, they may cause leaf tissue to die, creating a patchy, unhealthy appearance. 
In severe infections, entire leaves may become necrotic, contributing to significant loss of foliage.',
        ],
        [
            'title' => 'Fruit Lesions',
            'description' => 'Small, circular, dark spots may also develop on the surface of tomato fruits, typically beginning as minor blemishes. 
Over time, these lesions may expand, affecting the aesthetic and market value of the fruit. 
Infected fruit surfaces can also develop sunken or cracked areas if the fungal infection progresses unchecked. 
Even fruits that survive infection may have reduced shelf life and quality after harvest.',
        ],
        [
            'title' => 'Leaf Drop',
            'description' => 'As the disease advances, infected leaves will begin to yellow and fall from the plant prematurely. 
This premature defoliation reduces the plant’s photosynthetic capacity, directly impacting fruit development and yields. 
The increased exposure of fruits to direct sunlight after leaf drop can cause sunscald and reduce market quality. 
Heavy leaf loss can leave tomato plants weak and unable to sustain healthy fruit production throughout the growing season.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Fungicide Application',
            'description' => 'Applying fungicides like azoxystrobin, chlorothalonil, or mancozeb at the first signs of infection can help suppress the spread of target spot. 
Ensure thorough coverage on both upper and lower leaf surfaces, as well as stems where spores may reside. 
Follow the recommended intervals for reapplication, particularly after periods of rain or high humidity. 
Using fungicides preventatively during periods of known susceptibility can significantly reduce crop loss.',
        ],
        [
            'title' => 'Crop Rotation',
            'description' => 'Practice crop rotation by alternating tomatoes with non-solanaceous crops such as grains or legumes. 
This helps break the life cycle of the fungus by depriving it of a suitable host plant. 
Avoid planting tomatoes or related crops like peppers or eggplants in the same area for at least two seasons if target spot has been problematic. 
Effective rotation reduces the buildup of fungal spores in soil and on plant debris over time.',
        ],
        [
            'title' => 'Sanitation',
            'description' => 'Good sanitation practices are crucial for managing target spot. 
Remove and destroy all infected leaves, fruits, and plant debris from the field or garden regularly. 
Do not compost infected material unless the compost reaches sufficiently high temperatures to kill fungal spores. 
Keeping the growing area clean minimizes the number of spores that can spread through water splash or wind.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Neem Oil Spray',
            'description' => 'Neem oil serves as a natural, eco-friendly fungicide with antifungal properties that help limit the spread of target spot. 
Prepare by mixing neem oil with water and a few drops of mild soap to help the mixture adhere to plant surfaces. 
Spray both upper and lower leaf surfaces thoroughly, repeating weekly or after rainfall. 
Using neem oil regularly can suppress early fungal growth and deter some insect pests simultaneously.',
        ],
        [
            'title' => 'Baking Soda Solution',
            'description' => 'A homemade fungicide can be prepared by mixing 1 tablespoon of baking soda with 1 liter of water, along with a small amount of liquid soap. 
The baking soda creates a slightly alkaline surface on leaves, which inhibits fungal growth and spore germination. 
Apply liberally to affected and surrounding foliage at weekly intervals for ongoing control. 
While not a cure for heavy infections, it’s effective as part of an integrated pest management approach.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Improve Air Circulation',
            'description' => 'Proper spacing of tomato plants improves airflow around foliage, reducing humidity levels and minimizing fungal spore survival. 
Train or stake plants vertically to allow sunlight to penetrate deeper into the canopy. 
Better air circulation ensures leaves dry more quickly after rain or irrigation, discouraging fungal infection. 
Combining this with selective pruning of dense growth enhances overall disease prevention.',
        ],
        [
            'title' => 'Avoid Overhead Watering',
            'description' => 'Overhead watering contributes to leaf wetness, creating ideal conditions for fungal spores to germinate. 
Switch to drip irrigation or soaker hoses to supply moisture directly to the plant’s root zone without wetting foliage. 
Water early in the day to allow any accidental wetting to dry before nightfall. 
Keeping foliage dry is one of the most effective strategies to prevent fungal outbreaks in tomatoes.',
        ],
        [
            'title' => 'Prune Lower Leaves',
            'description' => 'Pruning the lower leaves of tomato plants minimizes the risk of fungal spores splashing from the soil onto foliage during rain or irrigation. 
Remove any leaves that are in contact with the soil or show early signs of disease. 
Proper pruning improves light penetration, strengthens air circulation, and helps maintain overall plant vigor. 
Always use sanitized tools to prevent inadvertently spreading fungal spores between plants.',
        ],
    ],
],

            [
    'name' => 'Tomato___Tomato_mosaic_virus',
    'origin_name' => 'Tomato Mosaic Virus',
    'scientific_name' => 'Tomato mosaic virus',
    'also_know_as' => json_encode(['Tomato Mosaic Virus']),
    'type_disease' => 'Viral disease',
    'description' => 'Tomato mosaic virus (ToMV) is a serious viral disease that affects tomato plants worldwide. 
It is highly contagious and can be transmitted through contaminated hands, tools, seeds, and even tobacco products. 
The virus causes significant damage to the plant’s leaves and fruits, impacting overall plant health and yield. 
Infected plants often exhibit distorted growth, reduced vigor, and produce smaller, lower-quality fruit.',

    'symptoms' => [
        [
            'title' => 'Leaf Mottling',
            'description' => 'One of the earliest symptoms of tomato mosaic virus is the appearance of mosaic-like patterns of light and dark green on the leaves. 
These mottled areas may look patchy or irregular, making the foliage appear unhealthy or spotted. 
In severe cases, yellowing may accompany the mottling, further affecting photosynthesis. 
These distinctive patterns often make ToMV easy to identify among other tomato diseases.',
        ],
        [
            'title' => 'Leaf Distortion',
            'description' => 'In addition to mottling, infected leaves may become distorted, curled, or twisted. 
Some plants develop fern-like or shoestring patterns in their leaves, giving them a narrow and irregular shape. 
This distortion reduces the surface area available for photosynthesis, limiting the plant’s ability to grow and produce healthy fruit. 
In advanced infections, the entire plant may look stunted and deformed.',
        ],
        [
            'title' => 'Reduced Fruit Quality',
            'description' => 'Fruits from infected plants often develop uneven coloration, with green patches on otherwise ripened fruit. 
They may also appear smaller, misshapen, or blemished with rough or blotchy skin. 
Besides reduced market quality, the taste of the fruits may be compromised, affecting their culinary value. 
Severely infected plants can yield significantly fewer marketable tomatoes compared to healthy plants.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Remove Infected Plants',
            'description' => 'Once infection is confirmed, it’s essential to remove and destroy infected plants immediately to reduce the spread of the virus. 
Dispose of infected plants away from the garden—never compost them, as the virus may survive in the compost pile. 
Regular inspections help catch early infections before they spread throughout the entire garden. 
Quick removal is one of the most effective ways to limit the impact of tomato mosaic virus outbreaks.',
        ],
        [
            'title' => 'Sanitize Tools',
            'description' => 'Garden tools and equipment can easily spread the virus from infected to healthy plants. 
Sanitize all cutting and handling tools with a 10% bleach solution or commercial disinfectant before and after use. 
It’s especially important to clean tools thoroughly between handling different plants. 
Regular sanitation significantly reduces the chances of spreading ToMV within and between gardens.',
        ],
        [
            'title' => 'Control Insect Vectors',
            'description' => 'Although ToMV primarily spreads through mechanical means, some insect pests like aphids may act as vectors. 
By controlling common sap-sucking insects in the garden, the risk of viral transmission can be reduced. 
Use insecticidal soaps, neem oil, or introduce beneficial predatory insects to keep pest populations under control. 
Managing insect populations helps prevent both ToMV spread and secondary infections from other diseases.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Milk Spray',
            'description' => 'Some gardeners use diluted milk sprays as a foliar treatment to potentially reduce viral spread. 
Mix 1 part milk with 4 to 9 parts water and apply to both sides of the leaves regularly. 
While not a guaranteed cure, milk sprays may provide a slight protective barrier and benefit overall leaf health. 
This approach is more effective when combined with strict sanitation and other preventive strategies.',
        ],
        [
            'title' => 'Hand Washing',
            'description' => 'Since tomato mosaic virus spreads through touch, practicing good hand hygiene is essential when working with plants. 
Wash your hands thoroughly with soap and water before and after handling tomato plants or tools. 
It’s especially important to wash after using tobacco products, which can also harbor the virus. 
Frequent hand washing can greatly reduce the risk of inadvertently spreading ToMV between plants.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Use Resistant Varieties',
            'description' => 'Planting tomato varieties that have been bred for resistance to tomato mosaic virus provides an excellent first line of defense. 
These resistant cultivars are specifically developed to reduce the likelihood of infection or lessen symptom severity. 
Check seed catalogs or consult agricultural extension services for recommendations on resistant varieties for your region. 
Growing resistant types helps safeguard harvests even in environments where ToMV is present.',
        ],
        [
            'title' => 'Certified Seeds',
            'description' => 'Always source seeds from reputable suppliers that certify their seeds to be free of tomato mosaic virus. 
Avoid using saved seeds from potentially infected plants, as the virus can be seed-borne. 
Using virus-free transplants is equally important when purchasing seedlings from nurseries. 
Starting with healthy, certified material greatly minimizes the initial risk of introducing the virus to your garden.',
        ],
        [
            'title' => 'Avoid Smoking',
            'description' => 'Tomato mosaic virus can survive in tobacco products, making smokers potential vectors for disease spread. 
Avoid smoking near tomato plants or handling them after smoking unless hands are washed thoroughly. 
Gardeners who use tobacco should take additional precautions by wearing gloves when handling plants. 
Minimizing exposure from tobacco sources plays a critical role in reducing ToMV outbreaks in home and commercial gardens.',
        ],
    ],
],

            [
    'name' => 'Tomato___Tomato_Yellow_Leaf_Curl_Virus',
    'origin_name' => 'Tomato Yellow Leaf Curl Virus',
    'scientific_name' => 'Tomato yellow leaf curl virus',
    'also_know_as' => json_encode(['Tomato Yellow Leaf Curl Virus']),
    'type_disease' => 'Viral disease',
    'description' => 'Tomato yellow leaf curl virus (TYLCV) is one of the most damaging viral diseases affecting tomatoes worldwide. 
It is primarily spread by whiteflies, which carry the virus from plant to plant. 
The virus affects both the vegetative and reproductive stages of the plant, leading to poor fruit development. 
Yield losses from TYLCV can be significant, especially in regions with high whitefly populations.',

    'symptoms' => [
        [
            'title' => 'Leaf Curling',
            'description' => 'Infected plants display upward curling of leaves accompanied by pronounced yellowing. 
The leaves become thicker, brittle, and display an overall reduction in size. 
This curling severely impacts the plant’s ability to photosynthesize properly, leading to reduced plant vigor. 
Leaf deformation makes infected plants easily distinguishable from healthy ones in the field.',
        ],
        [
            'title' => 'Stunted Growth',
            'description' => 'Tomato plants infected with TYLCV exhibit stunted and bushy growth due to shortened internodes. 
New growth appears deformed, and the overall size of the plant remains small even under optimal conditions. 
This stunting results from the virus disrupting the plant’s hormonal balance and nutrient transport. 
Severely affected plants produce very little usable fruit, impacting commercial and home growers alike.',
        ],
        [
            'title' => 'Flower Drop',
            'description' => 'Premature flower drop is a common symptom of TYLCV infection, further compounding the reduction in yield. 
As the virus weakens the plant, it fails to sustain blossoms long enough for successful pollination and fruit set. 
Infected plants may produce flowers that fall off before fruit formation or show deformed flower structures. 
This leads to drastically fewer tomatoes and can make entire harvests unprofitable in severe outbreaks.',
        ],
    ],

    'solutions' => [
        [
            'title' => 'Insecticide Application',
            'description' => 'Controlling the whitefly population is key to managing TYLCV outbreaks. 
Systemic insecticides such as imidacloprid are effective at reducing whitefly numbers on infected and neighboring plants. 
Apply according to label instructions, ensuring good coverage on the undersides of leaves where whiteflies congregate. 
Combine insecticide use with other integrated pest management (IPM) techniques for best results.',
        ],
        [
            'title' => 'Remove Infected Plants',
            'description' => 'Prompt removal of infected plants prevents further spread of the virus to healthy tomatoes. 
Carefully uproot and destroy infected plants by burning or disposing of them outside the garden area. 
Sanitize tools and hands afterward to avoid inadvertently spreading the virus to uninfected plants. 
Removing infected plants is a critical first response to TYLCV in both home and commercial gardens.',
        ],
        [
            'title' => 'Reflective Mulch',
            'description' => 'Using reflective or silver-colored mulch beneath plants can help deter whiteflies. 
The reflective surface confuses flying insects, making it harder for them to locate tomato plants. 
This cultural practice reduces the number of whiteflies landing on plants, thereby reducing virus transmission rates. 
Reflective mulches are especially effective when used in conjunction with other whitefly management strategies.',
        ],
    ],

    'home_remedies' => [
        [
            'title' => 'Soap Spray',
            'description' => 'Insecticidal soaps offer a non-toxic solution to help control whitefly populations on tomato plants. 
Mix mild liquid soap with water and spray directly onto infested leaves, focusing on the undersides. 
The soap disrupts the whiteflies’ outer membranes, dehydrating and killing them on contact. 
Repeated applications may be required, especially in heavy infestations or during whitefly season.',
        ],
        [
            'title' => 'Neem Oil',
            'description' => 'Neem oil works as both an insecticide and a repellent, reducing whitefly activity on tomato plants. 
It contains azadirachtin, which interferes with insect feeding and reproduction. 
Regular applications can help break the life cycle of whiteflies, limiting virus transmission over time. 
Neem oil is organic and safe for beneficial insects when applied correctly, making it ideal for home gardens.',
        ],
    ],

    'preventions' => [
        [
            'title' => 'Whitefly Control',
            'description' => 'Reducing whitefly populations is essential to prevent TYLCV infections in tomato crops. 
Use sticky yellow traps to catch adult whiteflies and monitor infestation levels throughout the growing season. 
Installing physical barriers such as fine mesh nets can also limit whitefly access to plants. 
Consistent monitoring and control measures reduce the chances of large-scale viral outbreaks.',
        ],
        [
            'title' => 'Resistant Varieties',
            'description' => 'One of the most effective strategies for managing TYLCV is planting tomato varieties that have resistance or tolerance to the virus. 
Many hybrid cultivars have been developed specifically for regions prone to TYLCV outbreaks. 
Choosing resistant varieties reduces symptom severity and helps safeguard harvests even if some whiteflies are present. 
Consult local agricultural resources or seed suppliers for recommended resistant cultivars for your area.',
        ],
        [
            'title' => 'Weed Management',
            'description' => 'Weeds around tomato fields can serve as alternative hosts for whiteflies and other insect pests. 
Keep the growing area weed-free to reduce the potential for viral reservoirs and alternate hosts for whiteflies. 
Regular weeding combined with proper mulching also improves airflow around plants, reducing pest and disease pressures. 
Maintaining a clean, well-managed garden or field is essential for long-term TYLCV prevention.',
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
