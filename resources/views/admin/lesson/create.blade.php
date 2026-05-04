@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Create Lesson Package</h2>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('lessons.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" step="0.01" class="form-control" required>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('lessons.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
</div>

@endsection