@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Industries</h3>
        <a href="{{ route('industries.create') }}" class="btn btn-primary">Create New Industry</a>
    </div>

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

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($industries->count() > 0)
                        @foreach($industries as $industry)
                            <tr>
                                <td>
                                    @if($industry->image)
                                        <img src="{{ asset('storage/' . $industry->image) }}" 
                                             alt="{{ $industry->title }}" 
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/placeholder.jpg') }}" 
                                             alt="No image" 
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                    @endif
                                </td>
                                <td>{{ $industry->title }}</td>
                                <td>{{ $industry->user->name }}</td>
                                <td>{{ $industry->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('industries.edit', $industry->id) }}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('industries.destroy', $industry->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this industry?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No industries found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $industries->links() }}
        </div>
    </div>
</div>
@endsection
