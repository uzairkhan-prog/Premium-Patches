@extends('admin.layouts.app')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Clients</p>
                                <h1 class="mb-0">{{ $clientsTotal }}</h1>
                            </div>
                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Services</p>
                                <h1 class="mb-0">7</h1>
                            </div>
                            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                        </div>
                        <canvas id="budget-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Blogs</p>
                                <h1 class="mb-0">{{ $blogsTotal }}</h1>
                            </div>
                            <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                        </div>
                        <canvas id="balance-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped project-orders-table">
                            <thead>
                                <tr>
                                    <th class="ms-5">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Submissions</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($clients as $client)
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->message }}</td>
                                    <td>{{ $client->created_at->format('M. d, Y h:i A') }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                                                Edit
                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                            </a> -->
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </form>
                                        </div>
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

@endsection