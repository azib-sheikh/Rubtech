@extends('layouts.app')

@section('content')

<div class="container-fluid py-3">
    <h3>Create Post</h3>
    <div class="p-3 bg-white mt-4">
        <form method="POST" action="{{ route('blogs.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="post Title">

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*"
                    onchange="previewImage(event)">

                <div class="mt-3">
                    <img id="image-preview" src="#" alt="Image Preview"
                        style="max-width: 300px; display: none; border: 1px solid #ccc; padding: 5px;" />
                </div>
            </div>
            <div class="mb-3">
                <label for="postcontent" class="form-label">Post Content</label>
                <textarea class="form-control w-100" name="content" id="" rows="10"></textarea>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn px-4 btn-primary">Post</button>
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