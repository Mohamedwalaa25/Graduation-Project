@extends('Dashboard.Layouts.Master')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('DataTable/dataTables.bootstrap5.min.css') }}">

    <script src="{{ URL::asset('DataTable/jquery-3.7.0.js') }}"></script>
    <script src="{{ URL::asset('DataTable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('DataTable/dataTables.bootstrap5.min.js') }}"></script>

    <style>
        .upload-area {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .upload-area:hover {
            background-color: #f8f9fa;
            border-color: #0d6efd !important;
        }

        .nav-pills .nav-link {
            border-radius: 25px;
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }

        .progress {
            border-radius: 10px;
        }

        .progress-bar {
            border-radius: 10px;
            transition: width 0.6s ease;
        }

        .modal-content {
            border-radius: 15px;
        }

        .modal-header {
            border-radius: 15px 15px 0 0;
        }

        .btn {
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image-preview {
            position: relative;
            display: inline-block;
            margin: 5px;
        }

        .image-preview img {
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .image-preview:hover img {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .delete-image-btn {
            position: absolute;
            top: -8px;
            right: -8px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .delete-image-btn:hover {
            transform: scale(1.1);
        }

        .form-floating {
            position: relative;
        }

        .tooltip-icon {
            cursor: help;
            color: #6c757d;
        }

        .tooltip-icon:hover {
            color: #0d6efd;
        }

        /* Edit Modal Specific Styles */
        #edit .modal-dialog {
            max-width: 90%;
        }

        #edit .form-control:focus,
        #edit .form-select:focus {
            border-color: #ffc107;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }

        #edit .nav-pills .nav-link.active {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        /* Visual feedback for populated fields */
        .form-control.populated {
            background-color: #e8f5e8;
            border-left: 3px solid #28a745;
        }

        .form-select.populated {
            background-color: #e8f5e8;
            border-left: 3px solid #28a745;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": false
            });
        });
    </script>
@endsection
@section('title_page')
    Plants
@endsection
@section('one')
    Plants
@endsection
@section('two')
    Plants
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <x-alerts></x-alerts>
            <div id="custom-toast-container" style="width:300px; position: fixed; top: 20px; right: 20px; z-index: 9999;">
            </div>


            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="data_buttons">
                            <h5 class="card-title">Plants Management </h5>

                            {{-- _______________________________ start Button _______________________________ --}}


                            <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add"
                                data-bs-whatever="@mdo">Add Plant</a>


                            {{-- _______________________________ end Button _______________________________ --}}
                        </div>



                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Scientific Name</th>
                                    <th>Genus</th>
                                    <th>Family</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}

                                @foreach ($plants as $plant)
                                    <tr>
                                        <td>
                                            @if ($plant->images->count() > 0)
                                                <img style="width: 79.6px;height: 79.6px;"
                                                    src="{{ URL::asset('Backend/Uploades/Plants/' . $plant->images->first()->image) }}"
                                                    class="img-thumbnail" alt="Plant Image">
                                            @else
                                                <img style="width: 79.6px;height: 79.6px;"
                                                    src="{{ URL::asset('Backend/Uploades/Plants/default.png') }}"
                                                    class="img-thumbnail" alt="Default Image">
                                            @endif
                                        </td>
                                        <td>{{ $plant->name }}</td>
                                        <td>{{ $plant->scientific_name }}</td>
                                        <td>{{ $plant->genus->name ?? 'N/A' }}</td>
                                        <td>{{ $plant->family->name ?? 'N/A' }}</td>
                                        <td>
                                            {{-- <a href="{{ url('dashboard/plant/show', $plant->id) }}"
                                               class="btn btn-outline-info btn-sm me-1">
                                                <i class="bi bi-eye"></i> View
                                            </a> --}}

                                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit"
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
                                                class="btn btn-outline-warning edit_btn">Edit</button>

                                            <a href="{{ url('dashboard/plant/delete', $plant->id) }}"
                                                class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this plant?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                {{-- _______________________________ end foreach _______________________________ --}}
                            </tbody>
                        </table>

                        <div style="display: flex;justify-content: center;">
                            <div>
                                {!! $plants->links() !!}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Include Create Modal --}}
    @include('Dashboard.pages.Plants.create')

    {{-- Include Edit Modal --}}
    @include('Dashboard.pages.Plants.edit')
    </h6>
@endsection

@section('js')
    <script src="{{ URL::asset('Backend/assets/js/plants.js') }}"></script>
    <script>
        // Additional debugging and fallback
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, checking edit buttons...');

            // Fallback event listener for edit buttons
            document.addEventListener('click', function(e) {
                if (e.target.closest('.edit_btn')) {
                    console.log('Edit button clicked (fallback)');
                    const button = e.target.closest('.edit_btn');

                    // Get all data attributes
                    const data = {};
                    Array.from(button.attributes).forEach(attr => {
                        if (attr.name.startsWith('data-')) {
                            data[attr.name] = attr.value;
                        }
                    });

                    console.log('Button data attributes:', data);

                    // Manually populate form
                    setTimeout(() => {
                        populateFormManually(button);
                    }, 100);
                }
            });

            function populateFormManually(button) {
                console.log('Manually populating form...');

                // Basic fields
                const fields = {
                    'edit_id': button.getAttribute('data-id_plant_btn'),
                    'edit_name': button.getAttribute('data-name_plant_btn'),
                    'edit_botanical_name': button.getAttribute('data-botanical_name_plant_btn'),
                    'edit_scientific_name': button.getAttribute('data-scientific_name_plant_btn'),
                    'edit_also_known_as': button.getAttribute('data-also_known_as_plant_btn'),
                    'edit_description': button.getAttribute('data-description_plant_btn'),
                    'edit_toughness': button.getAttribute('data-toughness_plant_btn'),
                    'edit_maintenance': button.getAttribute('data-maintenance_plant_btn'),
                    'edit_sunlight': button.getAttribute('data-sunlight_plant_btn'),
                    'edit_hardness_zone': button.getAttribute('data-hardness_zone_plant_btn'),
                    'edit_min_ph': button.getAttribute('data-min_ph_plant_btn'),
                    'edit_max_ph': button.getAttribute('data-max_ph_plant_btn'),
                    'edit_min_tp': button.getAttribute('data-min_tp_plant_btn'),
                    'edit_ideal_min_tp': button.getAttribute('data-ideal_min_tp_plant_btn'),
                    'edit_ideal_max_tp': button.getAttribute('data-ideal_max_tp_plant_btn'),
                    'edit_max_tp': button.getAttribute('data-max_tp_plant_btn'),
                    'edit_water': button.getAttribute('data-water_plant_btn'),
                    'edit_repotting': button.getAttribute('data-repotting_plant_btn'),
                    'edit_fertilizer': button.getAttribute('data-fertilizer_plant_btn'),
                    'edit_misting': button.getAttribute('data-misting_plant_btn'),
                    'edit_pruning': button.getAttribute('data-pruning_plant_btn'),
                    'edit_uses': button.getAttribute('data-uses_plant_btn'),
                    'edit_cluture': button.getAttribute('data-culture_plant_btn'),
                    'edit_pests': button.getAttribute('data-pests_plant_btn'),
                    'edit_diseases': button.getAttribute('data-diseases_plant_btn'),
                    'edit_section_id': button.getAttribute('data-section_id_plant_btn'),
                    'edit_genus_id': button.getAttribute('data-genus_id_plant_btn'),
                    'edit_family_id': button.getAttribute('data-family_id_plant_btn'),
                    'edit_order_id': button.getAttribute('data-order_id_plant_btn'),
                    'edit_group_id': button.getAttribute('data-group_id_plant_btn'),
                    'edit_phylum_id': button.getAttribute('data-phylum_id_plant_btn'),
                    'edit_type_id': button.getAttribute('data-type_id_plant_btn'),
                    'edit_drainage_id': button.getAttribute('data-drainage_id_plant_btn')
                };

                Object.keys(fields).forEach(fieldId => {
                    const element = document.getElementById(fieldId);
                    const value = fields[fieldId];

                    if (element && value && value !== 'null' && value !== '') {
                        element.value = value;
                        element.classList.add('populated');
                        console.log(`Set ${fieldId} = ${value}`);
                    }
                });

                // Handle tags
                const tagsData = button.getAttribute('data-tags_plant_btn');
                if (tagsData) {
                    const tagSelect = document.getElementById('edit_tags');
                    if (tagSelect) {
                        const tagIds = tagsData.split(',');
                        Array.from(tagSelect.options).forEach(option => {
                            option.selected = tagIds.includes(option.value);
                        });
                        tagSelect.classList.add('populated');
                    }
                }

                // Load images
                const plantId = button.getAttribute('data-id_plant_btn');
                if (plantId && typeof loadCurrentImages === 'function') {
                    loadCurrentImages(plantId);
                }
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $(".edit_btn").click(function() {
                // Get all data attributes
                let id_plant_btn = $(this).data("id_plant_btn");
                let name_plant_btn = $(this).data("name_plant_btn");
                let botanical_name_plant_btn = $(this).data("botanical_name_plant_btn");
                let scientific_name_plant_btn = $(this).data("scientific_name_plant_btn");
                let also_known_as_plant_btn = $(this).data("also_known_as_plant_btn");
                let description_plant_btn = $(this).data("description_plant_btn");
                let toughness_plant_btn = $(this).data("toughness_plant_btn");
                let maintenance_plant_btn = $(this).data("maintenance_plant_btn");
                let sunlight_plant_btn = $(this).data("sunlight_plant_btn");
                let hardness_zone_plant_btn = $(this).data("hardness_zone_plant_btn");
                let min_ph_plant_btn = $(this).data("min_ph_plant_btn");
                let max_ph_plant_btn = $(this).data("max_ph_plant_btn");
                let min_tp_plant_btn = $(this).data("min_tp_plant_btn");
                let ideal_min_tp_plant_btn = $(this).data("ideal_min_tp_plant_btn");
                let ideal_max_tp_plant_btn = $(this).data("ideal_max_tp_plant_btn");
                let max_tp_plant_btn = $(this).data("max_tp_plant_btn");
                let water_plant_btn = $(this).data("water_plant_btn");
                let repotting_plant_btn = $(this).data("repotting_plant_btn");
                let fertilizer_plant_btn = $(this).data("fertilizer_plant_btn");
                let misting_plant_btn = $(this).data("misting_plant_btn");
                let pruning_plant_btn = $(this).data("pruning_plant_btn");
                let uses_plant_btn = $(this).data("uses_plant_btn");
                let culture_plant_btn = $(this).data("culture_plant_btn");
                let pests_plant_btn = $(this).data("pests_plant_btn");
                let diseases_plant_btn = $(this).data("diseases_plant_btn");
                let section_id_plant_btn = $(this).data("section_id_plant_btn");
                let genus_id_plant_btn = $(this).data("genus_id_plant_btn");
                let family_id_plant_btn = $(this).data("family_id_plant_btn");
                let order_id_plant_btn = $(this).data("order_id_plant_btn");
                let group_id_plant_btn = $(this).data("group_id_plant_btn");
                let phylum_id_plant_btn = $(this).data("phylum_id_plant_btn");
                let type_id_plant_btn = $(this).data("type_id_plant_btn");
                let drainage_id_plant_btn = $(this).data("drainage_id_plant_btn");
                let tags_plant_btn = $(this).data("tags_plant_btn");

                // Set values in modal
                $(".id_plant_modal").val(id_plant_btn);
                $(".name_plant_modal").val(name_plant_btn);
                $(".botanical_name_plant_modal").val(botanical_name_plant_btn);
                $(".scientific_name_plant_modal").val(scientific_name_plant_btn);
                $(".also_known_as_plant_modal").val(also_known_as_plant_btn);
                $(".description_plant_modal").val(description_plant_btn);
                $(".toughness_plant_modal").val(toughness_plant_btn);
                $(".maintenance_plant_modal").val(maintenance_plant_btn);
                $(".sunlight_plant_modal").val(sunlight_plant_btn);
                $(".hardness_zone_plant_modal").val(hardness_zone_plant_btn);
                $(".min_ph_plant_modal").val(min_ph_plant_btn);
                $(".max_ph_plant_modal").val(max_ph_plant_btn);
                $(".min_tp_plant_modal").val(min_tp_plant_btn);
                $(".ideal_min_tp_plant_modal").val(ideal_min_tp_plant_btn);
                $(".ideal_max_tp_plant_modal").val(ideal_max_tp_plant_btn);
                $(".max_tp_plant_modal").val(max_tp_plant_btn);
                $(".water_plant_modal").val(water_plant_btn);
                $(".repotting_plant_modal").val(repotting_plant_btn);
                $(".fertilizer_plant_modal").val(fertilizer_plant_btn);
                $(".misting_plant_modal").val(misting_plant_btn);
                $(".pruning_plant_modal").val(pruning_plant_btn);
                $(".uses_plant_modal").val(uses_plant_btn);
                $(".culture_plant_modal").val(culture_plant_btn);
                $(".pests_plant_modal").val(pests_plant_btn);
                $(".diseases_plant_modal").val(diseases_plant_btn);
                $(".section_id_plant_modal").val(section_id_plant_btn);
                $(".genus_id_plant_modal").val(genus_id_plant_btn);
                $(".family_id_plant_modal").val(family_id_plant_btn);
                $(".order_id_plant_modal").val(order_id_plant_btn);
                $(".group_id_plant_modal").val(group_id_plant_btn);
                $(".phylum_id_plant_modal").val(phylum_id_plant_btn);
                $(".type_id_plant_modal").val(type_id_plant_btn);
                $(".drainage_id_plant_modal").val(drainage_id_plant_btn);

                // Handle tags selection
                if (tags_plant_btn) {
                    let tagIds = tags_plant_btn.split(',');
                    $(".tags_plant_modal option").prop('selected', false);
                    tagIds.forEach(function(tagId) {
                        $(".tags_plant_modal option[value='" + tagId + "']").prop('selected', true);
                    });
                }
            });
        });

        // Tab navigation for Add Plant modal
        let currentAddTab = 0;
        const addTabs = ['#basic-info', '#environment-info', '#classification-info', '#media-info'];
        const addTabButtons = ['#basic-tab', '#environment-tab', '#classification-tab', '#media-tab'];

        $('#nextTab').click(function() {
            if (currentAddTab < addTabs.length - 1) {
                currentAddTab++;
                $(addTabButtons[currentAddTab]).tab('show');
                updateAddProgress();
                updateAddButtons();
            }
        });

        $('#prevTab').click(function() {
            if (currentAddTab > 0) {
                currentAddTab--;
                $(addTabButtons[currentAddTab]).tab('show');
                updateAddProgress();
                updateAddButtons();
            }
        });

        function updateAddProgress() {
            const progress = ((currentAddTab + 1) / addTabs.length) * 100;
            $('.progress-bar').css('width', progress + '%');
        }

        function updateAddButtons() {
            $('#prevTab').toggle(currentAddTab > 0);
            $('#nextTab').toggle(currentAddTab < addTabs.length - 1);
            $('#submitBtn').toggle(currentAddTab === addTabs.length - 1);
        }

        // Tab navigation for Edit Plant modal
        let currentEditTab = 0;
        const editTabs = ['#edit-basic-info', '#edit-environment-info', '#edit-classification-info', '#edit-media-info'];
        const editTabButtons = ['#edit-basic-tab', '#edit-environment-tab', '#edit-classification-tab', '#edit-media-tab'];

        $('#editNextTab').click(function() {
            if (currentEditTab < editTabs.length - 1) {
                currentEditTab++;
                $(editTabButtons[currentEditTab]).tab('show');
                updateEditProgress();
                updateEditButtons();
            }
        });

        $('#editPrevTab').click(function() {
            if (currentEditTab > 0) {
                currentEditTab--;
                $(editTabButtons[currentEditTab]).tab('show');
                updateEditProgress();
                updateEditButtons();
            }
        });

        function updateEditProgress() {
            const progress = ((currentEditTab + 1) / editTabs.length) * 100;
            $('#edit .progress-bar').css('width', progress + '%');
        }

        function updateEditButtons() {
            $('#editPrevTab').toggle(currentEditTab > 0);
            $('#editNextTab').toggle(currentEditTab < editTabs.length - 1);
            $('#editSubmitBtn').toggle(currentEditTab === editTabs.length - 1);
        }

        // Reset tabs when modals are opened
        $('#add').on('shown.bs.modal', function() {
            currentAddTab = 0;
            $(addTabButtons[0]).tab('show');
            updateAddProgress();
            updateAddButtons();
        });

        $('#edit').on('shown.bs.modal', function() {
            currentEditTab = 0;
            $(editTabButtons[0]).tab('show');
            updateEditProgress();
            updateEditButtons();
        });

        // Upload area click handler
        $('.upload-area').click(function() {
            $(this).find('input[type="file"]').click();
        });

        // File input change handler
        $('input[type="file"]').change(function() {
            const files = this.files;
            if (files.length > 0) {
                const fileNames = Array.from(files).map(file => file.name).join(', ');
                $(this).siblings('.upload-info').remove();
                $(this).closest('.upload-area').after(
                    `<div class="upload-info mt-2"><small class="text-success"><i class="bi bi-check-circle me-1"></i>${files.length} file(s) selected</small><br><small class="text-muted">${fileNames}</small></div>`
                    );

                // Update upload area appearance
                $(this).closest('.upload-area').removeClass('border-primary').addClass('border-success');
                $(this).closest('.upload-area').find('i').removeClass('text-primary').addClass('text-success');
                $(this).closest('.upload-area').find('h6').removeClass('text-primary').addClass('text-success')
                    .text('Files Ready to Upload');
                $(this).closest('.upload-area').find('p').text('Click to change selection');
            }
        });

        // Form validation enhancement
        $('form').on('submit', function(e) {
            let isValid = true;
            const requiredFields = $(this).find('[required]');

            requiredFields.each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    $(this).focus();
                    return false;
                } else {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                // Show error message
                const toast = `
                    <div class="toast align-items-center text-white bg-danger border-0 position-fixed top-0 end-0 m-3" role="alert" style="z-index: 9999;">
                        <div class="d-flex">
                            <div class="toast-body">
                                <i class="bi bi-exclamation-triangle me-2"></i>Please fill in all required fields.
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>
                `;
                $('body').append(toast);
                $('.toast').toast('show');
                setTimeout(() => $('.toast').remove(), 3000);
            }
        });

        // Real-time validation
        $('[required]').on('blur', function() {
            if ($(this).val()) {
                $(this).removeClass('is-invalid').addClass('is-valid');
            } else {
                $(this).removeClass('is-valid').addClass('is-invalid');
            }
        });

        // Function to delete image
        function deleteImage(imageId) {
            if (confirm('Are you sure you want to delete this image?')) {
                $.ajax({
                    url: '{{ url('dashboard/plant/image/delete') }}/' + imageId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Error deleting image');
                    }
                });
            }
        }

        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Enhanced image preview
        function previewImages(input) {
            const preview = $(input).closest('.upload-area').next('.image-preview-container');
            if (preview.length === 0) {
                $(input).closest('.upload-area').after('<div class="image-preview-container mt-3"></div>');
            }

            const container = $(input).closest('.upload-area').next('.image-preview-container');
            container.empty();

            if (input.files) {
                Array.from(input.files).forEach((file, index) => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imageHtml = `
                                <div class="image-preview d-inline-block">
                                    <img src="${e.target.result}" style="width: 80px; height: 80px; object-fit: cover;" class="img-thumbnail">
                                    <button type="button" class="btn btn-danger btn-sm delete-image-btn" onclick="removePreviewImage(this, ${index})">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            `;
                            container.append(imageHtml);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        }

        // Remove preview image
        function removePreviewImage(button, index) {
            $(button).closest('.image-preview').remove();
        }

        // Bind preview function to file inputs
        $('input[type="file"]').on('change', function() {
            previewImages(this);
        });
    </script>
@endsection
