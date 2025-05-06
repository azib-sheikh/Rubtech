@extends('layouts.app')

@section('content')

<div class="container-fluid py-3">
    <h3>Create Product</h3>
    <div class="p-3 bg-white mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

      <!--   @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif -->

      <!--   @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required>
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
                <div class="mt-3" id="image-preview-container">
                    <!-- Image previews will be added here -->
                </div>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea class="form-control tinymce w-100 @error('content') is-invalid @enderror" 
                          name="content" id="content" rows="10" >{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Product's Description</label>
                <textarea class="form-control tinymce w-100 @error('description') is-invalid @enderror" name="description" id="description" rows="10" >{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="compararison" class="form-label">Product's Comparison</label>
                <textarea class="form-control tinymce w-100 @error('compararison') is-invalid @enderror" name="compararison" id="compararison" rows="10" >{{ old('compararison') }}</textarea>
                @error('compararison')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Product's Category</label>
                <select name="category[]" multiple="multiple" class="form-control select2">
    <option value="seive cleaning ball">Seive cleaning ball</option>
    <option value="rubber ball">Rubber ball</option>
    <option value="barrel shaped seive cleaning balls">Barrel shaped seive cleaning balls</option>
    <option value="rubber sleeve">Rubber sleeve</option>
    <option value="lift rubber sleeve">Lift rubber sleeve</option>
    <option value="air lock rubber sleeve">Air lock rubber sleeve</option>
    <option value="de stoner">De stoner</option>
    <option value="classifier">Classifier</option>
    <option value="rubber ring">Rubber ring</option>
    <option value="rubber ring small">Rubber ring small</option>
    <option value="rubber ring big">Rubber ring big</option>
    <option value="anti vibration mounts">Anti vibration mounts</option>
    <option value="rubber inspection cap">Rubber inspection cap</option>
    <option value="inspection cap">Inspection cap</option>
    <option value="inspection cap with knob lock">Inspection cap with knob lock</option>
    <option value="Rubber cube">Rubber cube</option>
</select>
                @error('category[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="btn px-4 btn-primary">Publish</button>
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
                preview.style.maxWidth = '300px';
                preview.style.margin = '5px';
                preview.style.border = '1px solid #ccc';
                preview.style.padding = '5px';
                container.appendChild(preview);
            }

            reader.readAsDataURL(file);
        }
    }
</script>

@endpush