@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Lesson Packages</h2>
    <a href="{{ route('lessons.create') }}" class="btn btn-primary">+ Add Package</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table align-middle">
            <thead class="table align-middle">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="120">Price</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($packages as $package)
                <tr>
                    <td>{{ $package->title }}</td>
                    <td>{{ $package->description }}</td>
                    <td>₱{{ number_format($package->price, 2) }}</td>
                    <td>
                        <a href="{{ route('lessons.edit', $package) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                        <form action="{{ route('lessons.destroy', $package) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this package?')" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No packages found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection