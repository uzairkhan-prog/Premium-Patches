@extends('admin.layouts.app')
@section('content')

<div class="container mt-5">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0">Edit Blog</h2>
        </div>
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <img src="{{ asset('assets/blogs/' . $blog->image) }}" alt="Blog Image" class="img-fluid">
                <input type="file" class="form-control mt-3" name="image">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $blog->title }}" placeholder="Title" required>
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <textarea class="form-control" name="summary" rows="2" placeholder="Brief description" required>{{ $blog->summary }}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description-flora" class="form-control" name="description" rows="4" placeholder="Description" required>{{ $blog->description }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>

<!-- Flora Editor -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor/css/froala_editor.pkgd.min.css">
<link rel="stylesheet" href="{{ asset('css/froala_editor.pkgd.min.css') }}">

<script src="{{ asset('js/froala_editor.pkgd.min.js') }}"></script>
<script>
    $(document).ready(function() {
        new FroalaEditor('#description-flora', {
            key: 'uXD2lA6F6E5A4G3C3B11dNSWXf1h1MDb1CF1PLPFf1C1EESFKVlA3C11A8D7D2B4F3G2C3H3==',
            htmlUntouched: true,
            htmlAllowedTags: ['.*'],
            htmlAllowedAttrs: ['.*'],
            htmlAllowedStyleProps: ['.*'],
            htmlRemoveTags: ['script', 'style'],
            htmlAllowComments: true,
            attribution: false,
            indent_inner_html: true,
            imageUploadParams: {
                _token: $('meta[name="csrf-token"]').attr('content') // Pass CSRF token
            },
            imageUploadURL: '/upload_editor_image',
            imageUploadParam: 'file',
            imageUploadMethod: 'POST',
            // fullPage: true
        })
    })
</script>
@endsection