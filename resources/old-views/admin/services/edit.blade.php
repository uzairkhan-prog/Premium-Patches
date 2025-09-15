@extends('admin.layouts.app')
@section('content')

<div class="container mt-5">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0">Edit Service</h2>
        </div>
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="service_type" class="form-label">Service Type</label>
                <input type="text" class="form-control" name="service_type" value="{{ $service->service_type }}" placeholder="e.g., Personalized Assistance" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $service->title }}" placeholder="Title" required>
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <textarea class="form-control" name="summary" rows="2" placeholder="Brief description" required>{{ $service->summary }}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Description" required>{{ $service->description }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection