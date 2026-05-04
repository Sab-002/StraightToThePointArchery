@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h2>Add New Course</h2>
        <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('classes.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Course Code</label>
                    <input type="text" name="code" class="form-control" placeholder="e.g. CS101" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" name="title" class="form-control" placeholder="e.g. Intro to Programming" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Cost ($)</label>
                    <input type="text" name="cost" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Schedule</label>
                    <input type="text" name="schedule" class="form-control" placeholder="e.g. Mon/Wed 10:00 AM">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Prerequisite</label>
                <input type="text" name="prerequisite" class="form-control" placeholder="e.g. Basic Math">
            </div>

            <button type="submit" class="btn btn-primary px-5">Save Course</button>
        </form>
    </div>
</div>
@endsection
