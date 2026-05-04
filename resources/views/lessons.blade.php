{{-- resources/views/lessons.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- LESSONS HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold fade-up">Private Lessons</h1>
        <p class="lead mt-3 fade-up">
            Personalized coaching packages designed to improve your skills faster.
        </p>
    </div>
</section>

<!-- LESSON PACKAGES -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @foreach($lessons as $lesson)
            <div class="col-md-4 fade-up">
                <div class="card shadow border-0 h-100 zoom-in">
                    <div class="card-body text-center">
                        <h3 class="fw-bold">{{ $lesson->title }}</h3>
                        <p class="mt-3">{{ $lesson->description }}</p>
                        <h4 class="text-warning fw-bold mt-4">${{ number_format($lesson->price, 2) }}</h4>
                        <a href="{{ url('/enroll') }}" class="btn btn-dark mt-3 px-4">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection