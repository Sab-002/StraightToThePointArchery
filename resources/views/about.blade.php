{{-- resources/views/about.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- ABOUT HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead mt-3">
            Learn more about our mission, facilities, and dedication to archery education.
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="py-5">
    <div class="container">

        <div class="mb-5">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p>
                Straight to the Point Archery is a non-profit archery education center founded in 2005.
                Our goal is to provide high-quality instruction and build life skills through the
                discipline of archery.
            </p>
            <p>
                We welcome students of all ages and abilities—from beginners learning their first shot
                to advanced archers preparing for competition.
            </p>
        </div>

        <div class="mb-5">
            <h2 class="fw-bold mb-3">Our Facilities</h2>
            <p>
                Our indoor training facility includes 28 shooting lanes, private coaching rooms,
                and access to outdoor shooting fields. We are equipped to support both recreational
                and competitive archers.
            </p>
        </div>

        <div class="mb-5">
            <h2 class="fw-bold mb-3">Programs Offered</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Beginner to Advanced Group Classes</li>
                <li class="list-group-item">Private Coaching Sessions</li>
                <li class="list-group-item">Corporate and Birthday Events</li>
                <li class="list-group-item">Youth Programs and Community Outreach</li>
                <li class="list-group-item">Tournament Preparation</li>
            </ul>
        </div>

        <div>
            <h2 class="fw-bold mb-3">Our Commitment</h2>
            <p>
                We are committed to creating a positive and inclusive learning environment.
                Our certified instructors provide expert guidance while promoting safety,
                discipline, and confidence in every student.
            </p>
        </div>

    </div>
</section>

@endsection