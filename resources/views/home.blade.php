{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section text-white d-flex align-items-center" style="height: 90vh; background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('{{ asset('images/archery-bg.jpg') }}') center/cover no-repeat;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">Learn Archery From Beginner to Advanced</h1>
        <p class="lead mt-3">Professional coaching, structured classes, and expert guidance for all ages.</p>
        <a href="{{ url('/enroll') }}" class="btn btn-warning btn-lg mt-4 px-5">Enroll Now</a>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center p-4">
                    <h4 class="fw-bold">Classes</h4>
                    <p>Structured group sessions from beginner to advanced levels.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center p-4">
                    <h4 class="fw-bold">Private Lessons</h4>
                    <p>One-on-one coaching tailored to your goals and pace.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center p-4">
                    <h4 class="fw-bold">Events</h4>
                    <p>Corporate activities, youth programs, and tournaments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED CLASSES -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Featured Classes</h2>
        <div class="row g-4">

            @foreach($classes as $class)
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">{{ $class->code }}</h4>
                        <h5>{{ $class->title }}</h5>
                        <p>{{ Str::limit($class->description, 120) }}</p>
                        <p><strong>Cost:</strong> {{ $class->cost }}</p>
                        <p><strong>Schedule:</strong> {{ $class->schedule }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ url('/classes') }}" class="btn btn-outline-dark px-4">View More</a>
        </div>
    </div>
</section>

<!-- ABOUT PREVIEW -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">About Us</h2>
        <p class="lead">
            Straight to the Point Archery is a non-profit archery education center
            dedicated to teaching valuable life skills through the discipline of archery.
        </p>
        <a href="{{ url('/about') }}" class="btn btn-warning mt-3 px-4">Read More</a>
    </div>
</section>

@endsection