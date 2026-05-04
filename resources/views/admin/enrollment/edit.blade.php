@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Edit Enrollment</h2>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('enrollments.update', $enrollment) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ old('name', $enrollment->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control"
                    value="{{ old('age', $enrollment->age) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Class Course</label>
                <select name="class_course_id" class="form-control" required>
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}"
                            {{ $enrollment->class_course_id == $class->id ? 'selected' : '' }}>
                            {{ $class->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Schedule</label>
                <input type="text" name="schedule" class="form-control"
                    value="{{ old('schedule', $enrollment->schedule) }}">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
</div>

@endsection