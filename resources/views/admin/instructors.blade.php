@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Instructors List</h2>
    <a href="{{ route('instructors.create') }}" class="btn btn-primary">+ Add New Instructor</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Bio (Preview)</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($instructors as $instructor)
                    <tr>
                        <td>
                            <img src="{{ asset($instructor->image) }}" width="45" height="45" class="rounded-circle object-fit-cover shadow-sm" alt="No image">
                        </td>

                        <td>
                            <strong>{{ $instructor->name }}</strong>
                        </td>

                        <td>
                            {{ Str::limit($instructor->bio, 50) }}
                        </td>

                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('instructors.edit', $instructor->id) }}"
                                   class="btn btn-sm btn-outline-primary">
                                    Edit
                                </a>

                                <form action="{{ route('instructors.destroy', $instructor->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this instructor?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            No instructors found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
