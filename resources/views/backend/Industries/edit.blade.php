@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <h3>Edit Industry</h3>
    <div class="p-3 bg-white mt-4">
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

        <form method="POST" action="{{ route('industries.update', $industry->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Industry Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $industry->title) }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" accept="image/*" onchange="previewImage(event)">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="mt-3">
                    @if($industry->image)
                        <img src="{{ asset('storage/' . $industry->image) }}" 
                             alt="Current Image" 
                             style="max-width: 300px; border: 1px solid #ccc; padding: 5px;">
                    @endif
                    <img id="image-preview" src="#" alt="Image Preview" style="max-width: 300px; display: none; border: 1px solid #ccc; padding: 5px;" />
                </div>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Industry Content</label>
                <textarea class="form-control tinymce w-100 @error('content') is-invalid @enderror" name="content" id="content" rows="10" >{{ old('content', $industry->content) }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="btn px-4 btn-primary">Update</button>
                <a href="{{ route('industries.index') }}" class="btn btn-secondary">Back to List</a>
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
