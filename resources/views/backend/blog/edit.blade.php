@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Edit Blog Post</h3>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to Blogs</a>
    </div>

    <div class="p-3 bg-white mt-4">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                       id="title" value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" 
                       id="image" accept="image/*" onchange="previewImage(event)">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="mt-3">
                    @if($blog->image)
                        <p>Current Image:</p>
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                             alt="Current Image" 
                             style="max-width: 300px; border: 1px solid #ccc; padding: 5px;">
                    @endif
                    <img id="image-preview" src="#" alt="New Image Preview"
                        style="max-width: 300px; display: none; border: 1px solid #ccc; padding: 5px;" />
                </div>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea class="form-control ckeditor w-100 @error('content') is-invalid @enderror" 
                          name="content" id="content" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update Post</button>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage(event) {
        const preview = document.getElementById('image-preview');
        const file = event.target.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    }
</script>
@endpush