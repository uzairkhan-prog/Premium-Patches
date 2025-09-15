@extends('admin.layouts.app')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Services
                            <a href="{{ route('services.create') }}" class="btn btn-primary mb-3" style="position: absolute;right: 136px;margin: 0 !important;"><i class="fa-solid fa-plus"></i> Add Service</a>
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
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>
                                            @if ($service->image != null)
                                            <img src="{{ asset('assets/services/' . $service->image) }}" alt="Blog Image" width="100">
                                            @else
                                            <img src="{{ asset('assets/services/default/default.jpg') }}" alt="Blog Image" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ Str::limit($service->description, 50) }}</td>
                                        <td>{{ $service->service_type }}</td>
                                        <td>
                                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-success btn-rounded btn-fw">
                                                Edit
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
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

@endsection