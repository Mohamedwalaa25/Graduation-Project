// Plants Management JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize Create Modal
    initializeCreateModal();
    
    // Initialize Edit Modal
    initializeEditModal();
    
    // Initialize tooltips
    initializeTooltips();
});

function initializeCreateModal() {
    // Tab progress update for create modal
    const createTabs = document.querySelectorAll('#addPlantTabs .nav-link');
    const createProgressBar = document.querySelector('#add .progress-bar');
    const createProgressTexts = document.querySelectorAll('#add .d-flex.justify-content-between small');
    
    createTabs.forEach((tab, index) => {
        tab.addEventListener('shown.bs.tab', function() {
            const progress = ((index + 1) / createTabs.length) * 100;
            createProgressBar.style.width = progress + '%';
            
            createProgressTexts.forEach((text, textIndex) => {
                if (textIndex <= index) {
                    text.className = 'text-primary fw-bold';
                } else {
                    text.className = 'text-muted';
                }
            });
        });
    });

    // Image upload preview for create modal
    const createImageInput = document.getElementById('images');
    const createImagePreview = document.getElementById('image-preview');
    const createUploadArea = document.querySelector('#add .upload-area');

    if (createUploadArea && createImageInput) {
        createUploadArea.addEventListener('click', () => createImageInput.click());
        createUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            createUploadArea.classList.add('border-primary', 'bg-light');
        });
        createUploadArea.addEventListener('dragleave', () => {
            createUploadArea.classList.remove('border-primary', 'bg-light');
        });
        createUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            createUploadArea.classList.remove('border-primary', 'bg-light');
            createImageInput.files = e.dataTransfer.files;
            previewCreateImages();
        });

        createImageInput.addEventListener('change', previewCreateImages);
    }

    function previewCreateImages() {
        if (!createImagePreview) return;
        
        createImagePreview.innerHTML = '';
        const files = Array.from(createImageInput.files);
        
        files.forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageDiv = document.createElement('div');
                    imageDiv.className = 'image-preview';
                    imageDiv.innerHTML = `
                        <img src="${e.target.result}" alt="Preview" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                        <button type="button" class="btn btn-danger btn-sm delete-image-btn" onclick="removeCreateImage(${index})">
                            <i class="bi bi-x"></i>
                        </button>
                    `;
                    createImagePreview.appendChild(imageDiv);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    window.removeCreateImage = function(index) {
        const dt = new DataTransfer();
        const files = Array.from(createImageInput.files);
        files.splice(index, 1);
        files.forEach(file => dt.items.add(file));
        createImageInput.files = dt.files;
        previewCreateImages();
    };
}

function initializeEditModal() {
    // Tab progress update for edit modal
    const editTabs = document.querySelectorAll('#editPlantTabs .nav-link');
    const editProgressBar = document.querySelector('#edit .progress-bar');
    const editProgressTexts = document.querySelectorAll('#edit .d-flex.justify-content-between small');
    
    editTabs.forEach((tab, index) => {
        tab.addEventListener('shown.bs.tab', function() {
            const progress = ((index + 1) / editTabs.length) * 100;
            editProgressBar.style.width = progress + '%';
            
            editProgressTexts.forEach((text, textIndex) => {
                if (textIndex <= index) {
                    text.className = 'text-warning fw-bold';
                } else {
                    text.className = 'text-muted';
                }
            });
        });
    });

    // Image upload preview for edit modal
    const editImageInput = document.getElementById('edit_images');
    const editImagePreview = document.getElementById('edit-image-preview');
    const editUploadArea = document.querySelector('#edit .upload-area');

    if (editUploadArea && editImageInput) {
        editUploadArea.addEventListener('click', () => editImageInput.click());
        editUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            editUploadArea.classList.add('border-warning', 'bg-light');
        });
        editUploadArea.addEventListener('dragleave', () => {
            editUploadArea.classList.remove('border-warning', 'bg-light');
        });
        editUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            editUploadArea.classList.remove('border-warning', 'bg-light');
            editImageInput.files = e.dataTransfer.files;
            previewEditImages();
        });

        editImageInput.addEventListener('change', previewEditImages);
    }

    function previewEditImages() {
        if (!editImagePreview) return;
        
        editImagePreview.innerHTML = '';
        const files = Array.from(editImageInput.files);
        
        files.forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageDiv = document.createElement('div');
                    imageDiv.className = 'image-preview';
                    imageDiv.innerHTML = `
                        <img src="${e.target.result}" alt="Preview" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                        <button type="button" class="btn btn-danger btn-sm delete-image-btn" onclick="removeEditImage(${index})">
                            <i class="bi bi-x"></i>
                        </button>
                    `;
                    editImagePreview.appendChild(imageDiv);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    window.removeEditImage = function(index) {
        const dt = new DataTransfer();
        const files = Array.from(editImageInput.files);
        files.splice(index, 1);
        files.forEach(file => dt.items.add(file));
        editImageInput.files = dt.files;
        previewEditImages();
    };

    // Handle edit button clicks
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('edit_btn')) {
            console.log('Edit button clicked!');
            const button = e.target;
            console.log('Button element:', button);
            populateEditForm(button);
        }
    });

    // Also add direct event listeners to edit buttons
    function attachEditButtonListeners() {
        const editButtons = document.querySelectorAll('.edit_btn');
        console.log('Found edit buttons:', editButtons.length);

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                console.log('Direct edit button clicked!');
                populateEditForm(this);
            });
        });
    }

    // Attach listeners when DOM is ready
    attachEditButtonListeners();

    // Handle modal events
    const editModal = document.getElementById('edit');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function(event) {
            console.log('Edit modal is opening...');
            const button = event.relatedTarget; // Button that triggered the modal
            if (button && button.classList.contains('edit_btn')) {
                console.log('Modal triggered by edit button');
                populateEditForm(button);
            }
        });

        editModal.addEventListener('hidden.bs.modal', function() {
            console.log('Edit modal closed, resetting form...');
            resetEditForm();
        });
    }
}

function populateEditForm(button) {
    console.log('Populating edit form...');

    // Populate form fields with correct data attribute names
    const fieldMappings = {
        'id': 'id_plant_btn',
        'name': 'name_plant_btn',
        'botanical_name': 'botanical_name_plant_btn',
        'scientific_name': 'scientific_name_plant_btn',
        'also_known_as': 'also_known_as_plant_btn',
        'description': 'description_plant_btn',
        'toughness': 'toughness_plant_btn',
        'maintenance': 'maintenance_plant_btn',
        'sunlight': 'sunlight_plant_btn',
        'hardness_zone': 'hardness_zone_plant_btn',
        'min_ph': 'min_ph_plant_btn',
        'max_ph': 'max_ph_plant_btn',
        'min_tp': 'min_tp_plant_btn',
        'ideal_min_tp': 'ideal_min_tp_plant_btn',
        'ideal_max_tp': 'ideal_max_tp_plant_btn',
        'max_tp': 'max_tp_plant_btn',
        'water': 'water_plant_btn',
        'repotting': 'repotting_plant_btn',
        'fertilizer': 'fertilizer_plant_btn',
        'misting': 'misting_plant_btn',
        'pruning': 'pruning_plant_btn',
        'uses': 'uses_plant_btn',
        'cluture': 'culture_plant_btn',
        'pests': 'pests_plant_btn',
        'diseases': 'diseases_plant_btn',
        'section_id': 'section_id_plant_btn',
        'genus_id': 'genus_id_plant_btn',
        'family_id': 'family_id_plant_btn',
        'order_id': 'order_id_plant_btn',
        'group_id': 'group_id_plant_btn',
        'phylum_id': 'phylum_id_plant_btn',
        'type_id': 'type_id_plant_btn',
        'drainage_id': 'drainage_id_plant_btn'
    };

    Object.keys(fieldMappings).forEach(field => {
        const element = document.getElementById(`edit_${field}`);
        const value = button.getAttribute(`data-${fieldMappings[field]}`);

        console.log(`Field: ${field}, Element:`, element, `Value: ${value}`);

        if (element && value !== null && value !== 'null' && value !== '') {
            element.value = value;
            console.log(`Set ${field} to: ${value}`);
        } else {
            console.warn(`Could not set ${field}. Element exists: ${!!element}, Value: ${value}`);
        }
    });

    // Make sure the ID is set correctly
    const plantId = button.getAttribute('data-id_plant_btn');
    const idField = document.getElementById('edit_id');
    if (idField && plantId) {
        idField.value = plantId;
        console.log('Plant ID set to:', plantId); // Debug log
    } else {
        console.error('Could not set plant ID. ID field:', idField, 'Plant ID:', plantId);
    }

    // Set tags
    const tagsData = button.getAttribute('data-tags_plant_btn');
    console.log('Tags data:', tagsData);

    const tagSelect = document.getElementById('edit_tags');
    if (tagSelect) {
        // First, clear all selections
        Array.from(tagSelect.options).forEach(option => {
            option.selected = false;
        });

        // Then select the appropriate tags
        if (tagsData && tagsData.trim() !== '') {
            const tagIds = tagsData.split(',').map(id => id.trim());
            console.log('Tag IDs to select:', tagIds);

            Array.from(tagSelect.options).forEach(option => {
                if (tagIds.includes(option.value)) {
                    option.selected = true;
                    console.log('Selected tag:', option.value, option.text);
                }
            });
        }
    } else {
        console.warn('Tag select element not found');
    }

    // Load current images
    const plantId = button.getAttribute('data-id_plant_btn');
    if (plantId) {
        loadCurrentImages(plantId);
    }
}

function loadCurrentImages(plantId) {
    const baseUrl = window.location.origin;
    fetch(`${baseUrl}/dashboard/plant/images/${plantId}`)
        .then(response => response.json())
        .then(data => {
            const currentImagesContainer = document.getElementById('current-images');
            if (!currentImagesContainer) return;
            
            currentImagesContainer.innerHTML = '';
            
            if (data.images && data.images.length > 0) {
                data.images.forEach(image => {
                    const imageDiv = document.createElement('div');
                    imageDiv.className = 'image-preview position-relative d-inline-block m-2';
                    imageDiv.innerHTML = `
                        <img src="${image.url}" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                        <button type="button" class="btn btn-danger btn-sm delete-image-btn position-absolute" 
                                style="top: -8px; right: -8px; width: 24px; height: 24px; border-radius: 50%; padding: 0;"
                                onclick="deleteCurrentImage(${image.id}, this)">
                            <i class="bi bi-x"></i>
                        </button>
                    `;
                    currentImagesContainer.appendChild(imageDiv);
                });
            } else {
                currentImagesContainer.innerHTML = '<p class="text-muted">No images uploaded yet</p>';
            }
        })
        .catch(error => {
            console.error('Error loading images:', error);
            const currentImagesContainer = document.getElementById('current-images');
            if (currentImagesContainer) {
                currentImagesContainer.innerHTML = '<p class="text-danger">Error loading images</p>';
            }
        });
}

window.deleteCurrentImage = function(imageId, button) {
    if (confirm('Are you sure you want to delete this image?')) {
        const baseUrl = window.location.origin;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        fetch(`${baseUrl}/dashboard/plant/image/delete/${imageId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                button.closest('.image-preview').remove();
            } else {
                alert('Error deleting image');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error deleting image');
        });
    }
};

function initializeTooltips() {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

function resetEditForm() {
    console.log('Resetting edit form...');

    // Reset the form
    const form = document.getElementById('editPlantForm');
    if (form) {
        form.reset();

        // Remove populated class from all form elements
        form.querySelectorAll('.populated').forEach(element => {
            element.classList.remove('populated');
        });
    }

    // Clear all select elements
    const selects = document.querySelectorAll('#edit select');
    selects.forEach(select => {
        select.selectedIndex = 0;
    });

    // Clear current images
    const currentImagesContainer = document.getElementById('current-images');
    if (currentImagesContainer) {
        currentImagesContainer.innerHTML = '';
    }

    // Clear new image preview
    const editImagePreview = document.getElementById('edit-image-preview');
    if (editImagePreview) {
        editImagePreview.innerHTML = '';
    }

    // Reset to first tab
    const firstTab = document.querySelector('#editPlantTabs .nav-link');
    const firstTabPane = document.querySelector('#edit-basic-info');

    if (firstTab && firstTabPane) {
        // Remove active class from all tabs and panes
        document.querySelectorAll('#editPlantTabs .nav-link').forEach(tab => {
            tab.classList.remove('active');
        });
        document.querySelectorAll('#edit .tab-pane').forEach(pane => {
            pane.classList.remove('show', 'active');
        });

        // Activate first tab
        firstTab.classList.add('active');
        firstTabPane.classList.add('show', 'active');
    }

    // Reset progress bar
    const progressBar = document.querySelector('#edit .progress-bar');
    if (progressBar) {
        progressBar.style.width = '25%';
    }
}
