@extends('admin.layouts.app')
@section('content')

<!-- Portfolios CRUD - Start -->




<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Portfolios
                            <a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-3" style="position: absolute;right: 136px;margin: 0 !important;"><i class="fa-solid fa-plus"></i> Add Portfolio</a>
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $portfolio->id }}</td>
                                        <td>
                                            @if ($portfolio->image != null)
                                            <img src="{{ asset('assets/portfolios/' . $portfolio->image) }}" alt="Portfolio Image" width="100">
                                            @else
                                            <img src="{{ asset('assets/services/default/default.jpg') }}" alt="Portfolio Image" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>
                                            <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-success btn-rounded btn-fw">
                                                Edit
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
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
<!-- Portfolios CRUD - End -->

@endsection