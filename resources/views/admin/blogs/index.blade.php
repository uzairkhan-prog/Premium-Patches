@extends('admin.layouts.app')
@section('content')

<!-- Blogs CRUD - Start -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blogs
                            <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3" style="position: absolute;right: 136px;margin: 0 !important;"><i class="fa-solid fa-plus"></i> Add Blog</a>
                        </h4>
                        <div class="table-responsive">
                            @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>
                                            @if ($blog->image != null)
                                            <img src="{{ asset('assets/blogs/' . $blog->image) }}" alt="Blog Image" width="100">
                                            @else
                                            <img src="{{ asset('assets/services/default/default.jpg') }}" alt="Blog Image" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ Str::limit($blog->description, 50) }}</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-success btn-rounded btn-fw">
                                                Edit
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-rounded btn-fw">
                                                    Delete
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blogs CRUD - End -->

@endsection