<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Models\Section;
use App\Models\Genus;
use App\Models\Family;
use App\Models\Order;
use App\Models\Group;
use App\Models\Phylum;
use App\Models\Type;
use App\Models\Drainage;
use App\Models\Tag;
use App\Models\ImagePlant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::with(['genus', 'family', 'order', 'group', 'phylum', 'type', 'drainage', 'section', 'tags', 'images'])
            ->paginate(10);

        $sections = Section::all();
        $genera = Genus::all();
        $families = Family::all();
        $orders = Order::all();
        $groups = Group::all();
        $phylums = Phylum::all();
        $types = Type::all();
        $drainages = Drainage::all();
        $tags = Tag::all();

        return view('Dashboard.pages.Plants.index', compact(
            'plants',
            'sections',
            'genera',
            'families',
            'orders',
            'groups',
            'phylums',
            'types',
            'drainages',
            'tags'
        ));
    }

    public function show($id)
    {
        $plant = Plant::with(['genus', 'family', 'order', 'group', 'phylum', 'type', 'drainage', 'section', 'tags', 'images'])
            ->findOrFail($id);

        return view('Dashboard.pages.Plants.show', compact('plant'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:plants,name',
            'botanical_name' => 'required|string|max:255',
            'scientific_name' => 'required|string|max:255|unique:plants,scientific_name',
            'also_known_as' => 'nullable|string|max:1000',
            'description' => 'required|string|min:10',
            'toughness' => 'required|string|in:Hardy,Half-hardy,Tender',
            'maintenance' => 'required|string|in:Low,Moderate,High',
            'sunlight' => 'required|string|in:Full Sun,Partial Sun,Partial Shade,Full Shade',
            'hardness_zone' => 'required|string|max:50',
            'min_ph' => 'required|numeric|min:0|max:14',
            'max_ph' => 'required|numeric|',
            'min_tp' => 'required|numeric|',
            'ideal_min_tp' => 'required|numeric|',
            'ideal_max_tp' => 'required|numeric',
            'max_tp' => 'required|numeric',
            'water' => 'required|string|max:500',
            'repotting' => 'required|string|max:500',
            'fertilizer' => 'required|string|max:500',
            'misting' => 'required|string|max:500',
            'pruning' => 'required|string|max:500',
            'uses' => 'required|string|min:10',
            'cluture' => 'required|string|min:10',
            'pests' => 'nullable|string|max:1000',
            'diseases' => 'nullable|string|max:1000',
            'section_id' => 'required|exists:sections,id',
            'genus_id' => 'required|exists:genera,id',
            'family_id' => 'required|exists:families,id',
            'order_id' => 'required|exists:orders,id',
            'group_id' => 'required|exists:groups,id',
            'phylum_id' => 'required|exists:phylums,id',
            'type_id' => 'required|exists:types,id',
            'drainage_id' => 'required|exists:drainages,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120'
        ], [
            'name.unique' => 'A plant with this name already exists.',
            'scientific_name.unique' => 'A plant with this scientific name already exists.',
            'max_ph.gte' => 'Maximum pH must be greater than or equal to minimum pH.',
            'ideal_min_tp.gte' => 'Ideal minimum temperature must be greater than or equal to minimum temperature.',
            'ideal_max_tp.gte' => 'Ideal maximum temperature must be greater than or equal to ideal minimum temperature.',
            'max_tp.gte' => 'Maximum temperature must be greater than or equal to ideal maximum temperature.',
            'images.max' => 'You can upload maximum 10 images.',
            'images.*.max' => 'Each image must be less than 5MB.'
        ]);

        try {
            $plant = Plant::create([
                'name' => $request->name,
                'botanical_name' => $request->botanical_name,
                'scientific_name' => $request->scientific_name,
                'also_known_as' => $request->also_known_as ? explode(',', $request->also_known_as) : [],
                'description' => $request->description,
                'toughness' => $request->toughness,
                'maintenance' => $request->maintenance,
                'sunlight' => $request->sunlight,
                'hardness_zone' => $request->hardness_zone,
                'min_ph' => $request->min_ph,
                'max_ph' => $request->max_ph,
                'min_tp' => $request->min_tp,
                'ideal_min_tp' => $request->ideal_min_tp,
                'ideal_max_tp' => $request->ideal_max_tp,
                'max_tp' => $request->max_tp,
                'water' => $request->water,
                'repotting' => $request->repotting,
                'fertilizer' => $request->fertilizer,
                'misting' => $request->misting,
                'pruning' => $request->pruning,
                'uses' => $request->uses,
                'cluture' => $request->cluture,
                // 'pests' => $request->pests ? explode(',', $request->pests) : [],
                'pests' => $request->pests,
                'diseases' => $request->diseases,
                // 'diseases' => $request->diseases ? explode(',', $request->diseases) : [],

                'section_id' => $request->section_id,
                'genus_id' => $request->genus_id,
                'family_id' => $request->family_id,
                'order_id' => $request->order_id,
                'group_id' => $request->group_id,
                'phylum_id' => $request->phylum_id,
                'type_id' => $request->type_id,
                'drainage_id' => $request->drainage_id,
            ]);

            // Attach tags
            if ($request->has('tags')) {
                $plant->tags()->attach($request->tags);
            }

            // Handle image uploads
            if ($request->hasFile('images')) {
                // Create directory if it doesn't exist
                $uploadPath = public_path('Backend/Uploades/Plants');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move($uploadPath, $imageName);

                    ImagePlant::create([
                        'plant_id' => $plant->id,
                        'image' => $imageName
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Plant created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating plant: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        // Get plant ID from request
        $plantId = $request->input('id');

        if (!$plantId) {
            return redirect()->back()->with('error', 'Plant ID is required for update.');
        }

        $request->validate([
            'id' => 'required|exists:plants,id',
            'name' => 'required|string|max:255|unique:plants,name,' . $plantId,
            'botanical_name' => 'required|string|max:255',
            'scientific_name' => 'required|string|max:255|unique:plants,scientific_name,' . $plantId,
            'also_known_as' => 'nullable|string|max:1000',
            'description' => 'required|string|min:10',
            'toughness' => 'required|string|in:Hardy,Half-hardy,Tender',
            'maintenance' => 'required|string|in:Low,Moderate,High',
            'sunlight' => 'required|string|in:Full Sun,Partial Sun,Partial Shade,Full Shade',
            'hardness_zone' => 'required|string|max:50',
            'min_ph' => 'required|numeric|',
            'max_ph' => 'required|numeric|',
            'min_tp' => 'required|numeric',
            'ideal_min_tp' => 'required|numeric|',
            'ideal_max_tp' => 'required|numeric|',
            'max_tp' => 'required|numeric|',
            'water' => 'required|string|max:500',
            'repotting' => 'required|string|max:500',
            'fertilizer' => 'required|string|max:500',
            'misting' => 'required|string|max:500',
            'pruning' => 'required|string|max:500',
            'uses' => 'required|string|min:10',
            'cluture' => 'required|string|min:10',
            'pests' => 'nullable|string|max:1000',
            'diseases' => 'nullable|string|max:1000',
            'section_id' => 'required|exists:sections,id',
            'genus_id' => 'required|exists:genera,id',
            'family_id' => 'required|exists:families,id',
            'order_id' => 'required|exists:orders,id',
            'group_id' => 'required|exists:groups,id',
            'phylum_id' => 'required|exists:phylums,id',
            'type_id' => 'required|exists:types,id',
            'drainage_id' => 'required|exists:drainages,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120'
        ], [
            'name.unique' => 'A plant with this name already exists.',
            'scientific_name.unique' => 'A plant with this scientific name already exists.',
            'max_ph.gte' => 'Maximum pH must be greater than or equal to minimum pH.',
            'ideal_min_tp.gte' => 'Ideal minimum temperature must be greater than or equal to minimum temperature.',
            'ideal_max_tp.gte' => 'Ideal maximum temperature must be greater than or equal to ideal minimum temperature.',
            'max_tp.gte' => 'Maximum temperature must be greater than or equal to ideal maximum temperature.',
            'images.max' => 'You can upload maximum 10 images.',
            'images.*.max' => 'Each image must be less than 5MB.'
        ]);

        try {
            $plant = Plant::findOrFail($plantId);

            $plant->update([
                'name' => $request->name,
                'botanical_name' => $request->botanical_name,
                'scientific_name' => $request->scientific_name,
                'also_known_as' => $request->also_known_as ? explode(',', $request->also_known_as) : [],
                'description' => $request->description,
                'toughness' => $request->toughness,
                'maintenance' => $request->maintenance,
                'sunlight' => $request->sunlight,
                'hardness_zone' => $request->hardness_zone,
                'min_ph' => $request->min_ph,
                'max_ph' => $request->max_ph,
                'min_tp' => $request->min_tp,
                'ideal_min_tp' => $request->ideal_min_tp,
                'ideal_max_tp' => $request->ideal_max_tp,
                'max_tp' => $request->max_tp,
                'water' => $request->water,
                'repotting' => $request->repotting,
                'fertilizer' => $request->fertilizer,
                'misting' => $request->misting,
                'pruning' => $request->pruning,
                'uses' => $request->uses,
                'cluture' => $request->cluture,
                'pests' => $request->pests ? explode(',', $request->pests) : [],
                'diseases' => $request->diseases ? explode(',', $request->diseases) : [],
                'section_id' => $request->section_id,
                'genus_id' => $request->genus_id,
                'family_id' => $request->family_id,
                'order_id' => $request->order_id,
                'group_id' => $request->group_id,
                'phylum_id' => $request->phylum_id,
                'type_id' => $request->type_id,
                'drainage_id' => $request->drainage_id,
            ]);

            // Update tags
            if ($request->has('tags')) {
                $plant->tags()->sync($request->tags);
            } else {
                $plant->tags()->detach();
            }

            // Handle new image uploads
            if ($request->hasFile('images')) {
                // Create directory if it doesn't exist
                $uploadPath = public_path('Backend/Uploades/Plants');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move($uploadPath, $imageName);

                    ImagePlant::create([
                        'plant_id' => $plant->id,
                        'image' => $imageName
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Plant updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating plant: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $plant = Plant::findOrFail($id);

            // Delete associated images from storage
            foreach ($plant->images as $image) {
                $imagePath = public_path('Backend/Uploades/Plants/' . $image->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the plant (this will cascade delete images and tags due to foreign key constraints)
            $plant->delete();

            return redirect()->back()->with('success', 'Plant deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting plant: ' . $e->getMessage());
        }
    }

    public function deleteImage($id)
    {
        $image = ImagePlant::findOrFail($id);

        // Delete image from storage
        $imagePath = public_path('Backend/Uploades/Plants/' . $image->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $image->delete();

        return response()->json(['success' => true]);
    }

    public function getImages($id)
    {
        $plant = Plant::with('images')->findOrFail($id);

        $images = $plant->images->map(function ($image) {
            return [
                'id' => $image->id,
                'url' => asset('Backend/Uploades/Plants/' . $image->image),
                'name' => $image->image
            ];
        });

        return response()->json(['images' => $images]);
    }
}
