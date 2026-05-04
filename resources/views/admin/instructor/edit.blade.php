@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h2>Edit Instructor: {{ $instructor->name }}</h2>
        <a href="{{ route('instructors.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('instructors.update', $instructor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ $instructor->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Current Photo</label>
                @if($instructor->image)
                    <div class="mb-2">
                        <img src="{{ asset($instructor->image) }}" width="120" class="img-thumbnail rounded">
                    </div>
                @endif
                <label class="form-label d-block text-muted small">Upload new photo to change</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Bio</label>
                <textarea name="bio" class="form-control" rows="5">{{ $instructor->bio }}</textarea>
            </div>

            <button type="submit" class="btn btn-success px-5">Update Instructor</button>
        </form>
    </div>
</div>
@endsection
