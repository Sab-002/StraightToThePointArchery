@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h2>Add New Instructor</h2>
        <a href="{{ route('instructors.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('instructors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="e.g. John Doe" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Instructor Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Bio</label>
                <textarea name="bio" class="form-control" rows="5" placeholder="Write a short biography..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary px-5">Save Instructor</button>
        </form>
    </div>
</div>
@endsection
