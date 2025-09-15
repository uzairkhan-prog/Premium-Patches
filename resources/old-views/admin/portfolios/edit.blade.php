@extends('admin.layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Edit Portfolio</h2>
            </div>
            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="Image" class="form-label">Image</label>
                    <img src="{{ asset('assets/portfolios/' . $portfolio->image) }}" alt="Portfolio Image" width="100">
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $portfolio->title }}" placeholder="Title" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
