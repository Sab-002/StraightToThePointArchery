@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Edit Lesson Package</h2>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('lessons.update', $lesson) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    class="form-control"
                    value="{{ old('title', $lesson->title) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea 
                    name="description" 
                    class="form-control" 
                    rows="3"
                >{{ old('description', $lesson->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input 
                    type="number" 
                    name="price" 
                    step="0.01"
                    class="form-control"
                    value="{{ old('price', $lesson->price) }}"
                    required
                >
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('lessons.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
</div>

@endsection