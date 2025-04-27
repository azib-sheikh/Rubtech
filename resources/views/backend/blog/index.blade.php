@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr.no</th>
                    <th class="big-col" scope="col">Title</th>
                    <th scope="col">Date of published</th>
                    <th class="action-col" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($blogs as $key => $blog)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="ms-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach

                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection