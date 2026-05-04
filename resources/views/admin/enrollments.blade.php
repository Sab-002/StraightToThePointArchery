@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Enrollments</h2>
    <a href="{{ route('enrollments.create') }}" class="btn btn-primary">+ Add Enrollment</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Schedule</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->name }}</td>
                        <td>{{ $enrollment->age }}</td>
                        <td>{{ $enrollment->classCourse->title ?? 'N/A' }}</td>
                        <td>{{ $enrollment->schedule }}</td>
                        <td>
                            <a href="{{ route('enrollments.edit', $enrollment) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                            <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this enrollment?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No enrollments found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection