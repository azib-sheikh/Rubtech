@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-
    $imagePaths = collect($product['images'])->pluck('image_path')->toArray();
    dd($imagePaths);
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Products</h3>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
   
                  

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Description</th>
                                    <th>Comparison</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        
                                        <td>
                                        @if($product->images && $product->images->isNotEmpty())
    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->title }}" style="max-width: 50px;">
@else
    No Image
@endif
</td>

                                        <td>{{ $product->title }}</td>
                                        <td>{{ Str::limit($product->content, 50) }}</td>
                                        <td>{{ Str::limit($product->description, 50) }}</td>
                                        <td>{{ Str::limit($product->compararison, 50) }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection