@extends('admin.layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Edit Client</h2>
            </div>
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $client->name }}" placeholder="Edit Name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $client->email }}" placeholder="Edit Email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $client->phone }}" placeholder="Edit Phone" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Service</label>
                    <select name="service" id="service" class="form-control" required>
                        <option value="" disabled>Select a Service</option>
                        @foreach ($services as $service)
                            @if ($service->title == $client->service)
                                <option value="" selected>{{ $service->title }}</option>
                            @endif
                            <option value="{{ $service->title }}">{{ $service->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <textarea class="form-control" name="subject" rows="2" placeholder="Edit Subject" required>{{ $client->subject }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" rows="4" placeholder="Edit Message" required>{{ $client->message }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
