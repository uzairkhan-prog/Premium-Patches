@extends('admin.layouts.app')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0">Add Service</h2>
        </div>
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <!-- <div class="mb-3">
                    <label for="feature_icon" class="form-label">Feature Icon</label>
                    <input type="text" class="form-control" name="feature_icon" placeholder="e.g., icofont-pen-alt-2">
                </div> -->
            <div class="mb-3">
                <label for="service_type" class="form-label">Service Type</label>
                <input type="text" class="form-control" name="service_type" placeholder="e.g., Personalized Assistance" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <textarea class="form-control" name="summary" rows="2" placeholder="Brief description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Description" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection