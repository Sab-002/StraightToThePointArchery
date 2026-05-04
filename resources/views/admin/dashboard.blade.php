@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Dashboard Overview</h1>
        <span class="badge bg-primary">Admin Access</span>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 border-start border-primary border-4 p-3">
                <h6 class="text-muted">Total Classes</h6>
                <h3 class="mb-0">{{ $totalClasses ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 border-start border-success border-4 p-3">
                <h6 class="text-muted">Instructors</h6>
                <h3 class="mb-0">{{ $totalInstructors ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 border-start border-warning border-4 p-3">
                <h6 class="text-muted">New Messages</h6>
                <h3 class="mb-0">{{ $totalMessages ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 border-start border-info border-4 p-3">
                <h6 class="text-muted">Enrollments</h6>
                <h3 class="mb-0">{{ $totalEnrollments ?? 0 }}</h3>
            </div>
        </div>
    </div>

    <!-- Placeholder for a quick table or recent activity -->
    <div class="mt-5">
        <div class="card shadow-sm p-4">
            <h5>Recent Activity</h5>
            <p class="text-muted">Content for your admin tabs will go here.</p>
        </div>
    </div>
</div>
@endsection
