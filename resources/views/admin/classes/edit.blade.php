@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h2>Edit Course: {{ $course->code }}</h2>
        <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('classes.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- REQUIRED for updates -->
            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Course Code</label>
                    <input type="text" name="code" class="form-control" value="{{ $course->code }}" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $course->description }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Cost ($)</label>
                    <input type="text" name="cost" class="form-control" value="{{ $course->cost }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Schedule</label>
                    <input type="text" name="schedule" class="form-control" value="{{ $course->schedule }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Prerequisite</label>
                <input type="text" name="prerequisite" class="form-control" value="{{ $course->prerequisite }}">
            </div>

            <button type="submit" class="btn btn-success px-5">Update Course</button>
        </form>
    </div>
</div>
@endsection
