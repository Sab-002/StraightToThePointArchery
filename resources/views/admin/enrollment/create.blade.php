@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Create Enrollment</h2>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Class Course</label>
                <select name="class_course_id" class="form-control" required>
                    <option value="">Select Class</option>
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Schedule</label>
                <input type="text" name="schedule" class="form-control" placeholder="e.g. Mon-Wed 10AM">
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
</div>

@endsection