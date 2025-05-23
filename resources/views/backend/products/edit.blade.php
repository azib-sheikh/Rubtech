@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <h3>Edit Product</h3>
    <div class="p-3 bg-white mt-4">
        <pre>{{$product}}</pre>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $product->title) }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Product's Images</label>
                <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" id="images" accept="image/*" multiple onchange="previewImages(event)">
                @error('images')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <!-- Display existing images -->
                <div class="mt-3">
                    <h6>Existing Images:</h6>
                    <div class="d-flex flex-wrap" id="existing-images">
                        @if($product->images && $product->images->isNotEmpty())
                            @foreach($product->images as $image)
                                <div class="position-relative m-2 image-container" data-image-id="{{ $image->id }}">
                                    @php
                                        $imagePath = 'storage/' . $image->image_path;
                                        $fullPath = public_path($imagePath);
                                        $exists = file_exists($fullPath);
                                    @endphp
                                    <img src="{{ asset($imagePath) }}" 
                                         alt="Product Image" 
                                         style="max-width: 200px; border: 1px solid #ccc; padding: 5px;"
                                         onerror="this.onerror=null; this.src='{{ asset('images/placeholder.jpg') }}';">
                                    @if(!$exists)
                                        <div class="text-danger small">Image file not found: {{ $imagePath }}</div>
                                    @endif
                                    <button type="button" 
                                            class="btn btn-danger btn-sm position-absolute top-0 end-0" 
                                            onclick="deleteImage({{ $image->id }})">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <p>No images uploaded yet.</p>
                        @endif
                    </div>
                </div>

                <!-- Preview container for new images -->
                <div class="mt-3" id="image-preview-container">
                    <!-- New image previews will be added here -->
                </div>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Product's Content</label>
                <textarea class="form-control tinymce w-100 @error('content') is-invalid @enderror" name="content" id="content" rows="10" required>{{ old('content', $product->content) }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Product's Description</label>
                <textarea class="form-control tinymce w-100 @error('description') is-invalid @enderror" name="description" id="description" rows="10" required>{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="compararison" class="form-label">Product's Comparison</label>
                <textarea class="form-control tinymce w-100 @error('compararison') is-invalid @enderror" name="compararison" id="compararison" rows="10" required>{{ old('compararison', $product->compararison) }}</textarea>
                @error('compararison')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Product's Category</label>
                <select name="category[]" multiple="multiple" class="form-control select2">
                @php
    if (is_string($product->category)) {
        $selectedCategories = json_decode($product->category, true) ?? [];
    } elseif (is_array($product->category)) {
        $selectedCategories = $product->category;
    } else {
        $selectedCategories = [];
    }
@endphp

                    <option value="seive cleaning ball" {{ in_array('seive cleaning ball', $selectedCategories) ? 'selected' : '' }}>Seive cleaning ball</option>
                    <option value="rubber ball" {{ in_array('rubber ball', $selectedCategories) ? 'selected' : '' }}>Rubber ball</option>
                    <option value="barrel shaped seive cleaning balls" {{ in_array('barrel shaped seive cleaning balls', $selectedCategories) ? 'selected' : '' }}>Barrel shaped seive cleaning balls</option>
                    <option value="rubber sleeve" {{ in_array('rubber sleeve', $selectedCategories) ? 'selected' : '' }}>Rubber sleeve</option>
                    <option value="lift rubber sleeve" {{ in_array('lift rubber sleeve', $selectedCategories) ? 'selected' : '' }}>Lift rubber sleeve</option>
                    <option value="air lock rubber sleeve" {{ in_array('air lock rubber sleeve', $selectedCategories) ? 'selected' : '' }}>Air lock rubber sleeve</option>
                    <option value="de stoner" {{ in_array('de stoner', $selectedCategories) ? 'selected' : '' }}>De stoner</option>
                    <option value="classifier" {{ in_array('classifier', $selectedCategories) ? 'selected' : '' }}>Classifier</option>
                    <option value="rubber ring" {{ in_array('rubber ring', $selectedCategories) ? 'selected' : '' }}>Rubber ring</option>
                    <option value="rubber ring small" {{ in_array('rubber ring small', $selectedCategories) ? 'selected' : '' }}>Rubber ring small</option>
                    <option value="rubber ring big" {{ in_array('rubber ring big', $selectedCategories) ? 'selected' : '' }}>Rubber ring big</option>
                    <option value="anti vibration mounts" {{ in_array('anti vibration mounts', $selectedCategories) ? 'selected' : '' }}>Anti vibration mounts</option>
                    <option value="rubber inspection cap" {{ in_array('rubber inspection cap', $selectedCategories) ? 'selected' : '' }}>Rubber inspection cap</option>
                    <option value="inspection cap" {{ in_array('inspection cap', $selectedCategories) ? 'selected' : '' }}>Inspection cap</option>
                    <option value="inspection cap with knob lock" {{ in_array('inspection cap with knob lock', $selectedCategories) ? 'selected' : '' }}>Inspection cap with knob lock</option>
                    <option value="Rubber cube" {{ in_array('Rubber cube', $selectedCategories) ? 'selected' : '' }}>Rubber cube</option>
                </select>
                @error('category[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="btn px-4 btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImages(event) {
        const container = document.getElementById('image-preview-container');
        container.innerHTML = ''; // Clear previous previews

        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const preview = document.createElement('img');
                preview.src = e.target.result;
                preview.style.maxWidth = '200px';
                preview.style.margin = '5px';
                preview.style.border = '1px solid #ccc';
                preview.style.padding = '5px';
                container.appendChild(preview);
            }

            reader.readAsDataURL(file);
        }
    }

    function deleteImage(imageId) {
        if (confirm('Are you sure you want to delete this image?')) {
            fetch(`{{ route('products.deleteImage', '') }}/${imageId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the image container from the DOM
                    const imageContainer = document.querySelector(`.image-container[data-image-id="${imageId}"]`);
                    if (imageContainer) {
                        imageContainer.remove();
                    }
                    
                    // If no images left, show the "No images" message
                    const existingImages = document.getElementById('existing-images');
                    if (existingImages && existingImages.children.length === 0) {
                        existingImages.innerHTML = '<p>No images uploaded yet.</p>';
                    }
                } else {
                    alert('Failed to delete image: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting the image');
            });
        }
    }
</script>
@endpush