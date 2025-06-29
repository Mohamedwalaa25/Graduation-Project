@extends('Dashboard.Layouts.Master')

@section('css')
    <style>
        .plant-detail-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .plant-detail-card:hover {
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        .plant-image {
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .plant-image:hover {
            transform: scale(1.05);
        }
        .info-badge {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border-radius: 20px;
            padding: 8px 16px;
            font-size: 0.9rem;
            margin: 5px;
            display: inline-block;
        }
        .section-header {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            margin-bottom: 0;
        }
        .detail-row {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: 600;
            color: #495057;
        }
        .detail-value {
            color: #6c757d;
        }
        .tag-badge {
            background: #e9ecef;
            color: #495057;
            border-radius: 15px;
            padding: 5px 12px;
            font-size: 0.85rem;
            margin: 3px;
            display: inline-block;
        }
    </style>
@endsection

@section('title_page')
    Plant Details - {{ $plant->name }}
@endsection

@section('one')
    Plants
@endsection

@section('two')
    {{ $plant->name }}
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <!-- Plant Images -->
            <div class="col-lg-4">
                <div class="card plant-detail-card">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-images me-2"></i>Plant Images</h5>
                    </div>
                    <div class="card-body">
                        @if($plant->images->count() > 0)
                            <div id="plantCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($plant->images as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ URL::asset('Backend/Uploades/Plants/'.$image->image) }}" 
                                                 class="d-block w-100 plant-image" 
                                                 alt="Plant Image"
                                                 style="height: 300px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                </div>
                                @if($plant->images->count() > 1)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#plantCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#plantCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                @endif
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="bi bi-image text-muted" style="font-size: 4rem;"></i>
                                <p class="text-muted mt-2">No images available</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="card plant-detail-card mt-4">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-info-circle me-2"></i>Quick Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="info-badge">
                            <i class="bi bi-shield-check me-1"></i>{{ $plant->toughness }}
                        </div>
                        <div class="info-badge">
                            <i class="bi bi-tools me-1"></i>{{ $plant->maintenance }}
                        </div>
                        <div class="info-badge">
                            <i class="bi bi-sun me-1"></i>{{ $plant->sunlight }}
                        </div>
                        <div class="info-badge">
                            <i class="bi bi-geo-alt me-1"></i>Zone {{ $plant->hardness_zone }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plant Details -->
            <div class="col-lg-8">
                <!-- Basic Information -->
                <div class="card plant-detail-card">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-flower1 me-2"></i>{{ $plant->name }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row detail-row">
                            <div class="col-md-3 detail-label">Scientific Name:</div>
                            <div class="col-md-9 detail-value"><em>{{ $plant->scientific_name }}</em></div>
                        </div>
                        <div class="row detail-row">
                            <div class="col-md-3 detail-label">Botanical Name:</div>
                            <div class="col-md-9 detail-value">{{ $plant->botanical_name }}</div>
                        </div>
                        @if($plant->also_known_as)
                            <div class="row detail-row">
                                <div class="col-md-3 detail-label">Also Known As:</div>
                                <div class="col-md-9 detail-value">
                                    @if(is_array($plant->also_known_as))
                                        {{ implode(', ', $plant->also_known_as) }}
                                    @else
                                        {{ $plant->also_known_as }}
                                    @endif
                                </div>
                            </div>
                        @endif
                        <div class="row detail-row">
                            <div class="col-md-3 detail-label">Description:</div>
                            <div class="col-md-9 detail-value">{{ $plant->description }}</div>
                        </div>
                    </div>
                </div>

                <!-- Environmental Requirements -->
                <div class="card plant-detail-card mt-4">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-thermometer-half me-2"></i>Environmental Requirements</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-row">
                                    <div class="detail-label">pH Range:</div>
                                    <div class="detail-value">{{ $plant->min_ph }} - {{ $plant->max_ph }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Temperature Range:</div>
                                    <div class="detail-value">{{ $plant->min_tp }}°C - {{ $plant->max_tp }}°C</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Ideal Temperature:</div>
                                    <div class="detail-value">{{ $plant->ideal_min_tp }}°C - {{ $plant->ideal_max_tp }}°C</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-row">
                                    <div class="detail-label">Water Requirements:</div>
                                    <div class="detail-value">{{ $plant->water }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Drainage:</div>
                                    <div class="detail-value">{{ $plant->drainage->name ?? 'N/A' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Care Instructions -->
                <div class="card plant-detail-card mt-4">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-heart-pulse me-2"></i>Care Instructions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-row">
                                    <div class="detail-label">Repotting:</div>
                                    <div class="detail-value">{{ $plant->repotting }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Fertilizer:</div>
                                    <div class="detail-value">{{ $plant->fertilizer }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Misting:</div>
                                    <div class="detail-value">{{ $plant->misting }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-row">
                                    <div class="detail-label">Pruning:</div>
                                    <div class="detail-value">{{ $plant->pruning }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Uses:</div>
                                    <div class="detail-value">{{ $plant->uses }}</div>
                                </div>
                                <div class="detail-row">
                                    <div class="detail-label">Culture:</div>
                                    <div class="detail-value">{{ $plant->cluture }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information Row -->
        <div class="row mt-4">
            <!-- Taxonomic Classification -->
            <div class="col-lg-6">
                <div class="card plant-detail-card">
                    <div class="card-header section-header">
                        <h5 class="mb-0"><i class="bi bi-diagram-3 me-2"></i>Taxonomic Classification</h5>
                    </div>
                    <div class="card-body">
                        <div class="detail-row">
                            <div class="detail-label">Section:</div>
                            <div class="detail-value">{{ $plant->section->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Genus:</div>
                            <div class="detail-value">{{ $plant->genus->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Family:</div>
                            <div class="detail-value">{{ $plant->family->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Order:</div>
                            <div class="detail-value">{{ $plant->order->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Group:</div>
                            <div class="detail-value">{{ $plant->group->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Phylum:</div>
                            <div class="detail-value">{{ $plant->phylum->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Type:</div>
                            <div class="detail-value">{{ $plant->type->type ?? $plant->type->name ?? 'N/A' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pests, Diseases & Tags -->
            <div class="col-lg-6">
                <!-- Pests & Diseases -->
                @if($plant->pests || $plant->diseases)
                    <div class="card plant-detail-card">
                        <div class="card-header section-header">
                            <h5 class="mb-0"><i class="bi bi-bug me-2"></i>Pests & Diseases</h5>
                        </div>
                        <div class="card-body">
                            @if($plant->pests)
                                <div class="detail-row">
                                    <div class="detail-label">Common Pests:</div>
                                    <div class="detail-value">
                                        @if(is_array($plant->pests))
                                            {{ implode(', ', $plant->pests) }}
                                        @else
                                            {{ $plant->pests }}
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @if($plant->diseases)
                                <div class="detail-row">
                                    <div class="detail-label">Common Diseases:</div>
                                    <div class="detail-value">
                                        @if(is_array($plant->diseases))
                                            {{ implode(', ', $plant->diseases) }}
                                        @else
                                            {{ $plant->diseases }}
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Tags -->
                @if($plant->tags->count() > 0)
                    <div class="card plant-detail-card mt-4">
                        <div class="card-header section-header">
                            <h5 class="mb-0"><i class="bi bi-tags me-2"></i>Tags</h5>
                        </div>
                        <div class="card-body">
                            @foreach($plant->tags as $tag)
                                <span class="tag-badge">
                                    <i class="bi bi-tag-fill me-1"></i>{{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card plant-detail-card">
                    <div class="card-body text-center">
                        <a href="{{ url('dashboard/plant') }}" class="btn btn-secondary me-2">
                            <i class="bi bi-arrow-left me-1"></i>Back to Plants
                        </a>
                        <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#edit"
                                data-id_plant_btn="{{ $plant->id }}"
                                data-name_plant_btn="{{ $plant->name }}"
                                data-botanical_name_plant_btn="{{ $plant->botanical_name }}"
                                data-scientific_name_plant_btn="{{ $plant->scientific_name }}"
                                data-also_known_as_plant_btn="{{ is_array($plant->also_known_as) ? implode(',', $plant->also_known_as) : $plant->also_known_as }}"
                                data-description_plant_btn="{{ $plant->description }}"
                                data-toughness_plant_btn="{{ $plant->toughness }}"
                                data-maintenance_plant_btn="{{ $plant->maintenance }}"
                                data-sunlight_plant_btn="{{ $plant->sunlight }}"
                                data-hardness_zone_plant_btn="{{ $plant->hardness_zone }}"
                                data-min_ph_plant_btn="{{ $plant->min_ph }}"
                                data-max_ph_plant_btn="{{ $plant->max_ph }}"
                                data-min_tp_plant_btn="{{ $plant->min_tp }}"
                                data-ideal_min_tp_plant_btn="{{ $plant->ideal_min_tp }}"
                                data-ideal_max_tp_plant_btn="{{ $plant->ideal_max_tp }}"
                                data-max_tp_plant_btn="{{ $plant->max_tp }}"
                                data-water_plant_btn="{{ $plant->water }}"
                                data-repotting_plant_btn="{{ $plant->repotting }}"
                                data-fertilizer_plant_btn="{{ $plant->fertilizer }}"
                                data-misting_plant_btn="{{ $plant->misting }}"
                                data-pruning_plant_btn="{{ $plant->pruning }}"
                                data-uses_plant_btn="{{ $plant->uses }}"
                                data-culture_plant_btn="{{ $plant->cluture }}"
                                data-pests_plant_btn="{{ is_array($plant->pests) ? implode(',', $plant->pests) : $plant->pests }}"
                                data-diseases_plant_btn="{{ is_array($plant->diseases) ? implode(',', $plant->diseases) : $plant->diseases }}"
                                data-section_id_plant_btn="{{ $plant->section_id }}"
                                data-genus_id_plant_btn="{{ $plant->genus_id }}"
                                data-family_id_plant_btn="{{ $plant->family_id }}"
                                data-order_id_plant_btn="{{ $plant->order_id }}"
                                data-group_id_plant_btn="{{ $plant->group_id }}"
                                data-phylum_id_plant_btn="{{ $plant->phylum_id }}"
                                data-type_id_plant_btn="{{ $plant->type_id }}"
                                data-drainage_id_plant_btn="{{ $plant->drainage_id }}"
                                data-tags_plant_btn="{{ $plant->tags->pluck('id')->implode(',') }}"
                                class="edit_btn">
                            <i class="bi bi-pencil-square me-1"></i>Edit Plant
                        </button>
                        <a href="{{ url('dashboard/plant/delete', $plant->id) }}" 
                           class="btn btn-danger"
                           onclick="return confirm('Are you sure you want to delete this plant?')">
                            <i class="bi bi-trash me-1"></i>Delete Plant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Include Edit Modal --}}
    @include('Dashboard.pages.Plants.edit')
@endsection

@section('js')
    <script src="{{ URL::asset('Backend/assets/js/plants.js') }}"></script>
@endsection
