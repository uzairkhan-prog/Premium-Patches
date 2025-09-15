@extends('layouts.app')
@section('content')
<a href="">Create Service</a>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    @foreach($services as $service)
    <tr>
        <td>{{ $service->title }}</td>
        <td>{{ $service->description }}</td>
        <td>
            <a href="{{ route('admin.services.edit', $service) }}">Edit</a>
            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection