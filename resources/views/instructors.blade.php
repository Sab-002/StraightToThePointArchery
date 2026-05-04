{{-- resources/views/instructors.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- INSTRUCTORS HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Instructors</h1>
        <p class="lead mt-3">
            Meet the experienced coaches dedicated to your archery journey.
        </p>
    </div>
</section>

<!-- INSTRUCTORS LIST -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @foreach($instructors as $instructor)
            <div class="col-md-4 zoom-in">
                    <div class="card shadow border-0 h-100 text-center">

                    @if($instructor->image)
                        <img src="{{ asset($instructor->image) }}"
                            class="card-img-top"
                            alt="{{ $instructor->name }}"
                            style="height: 320px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/default-instructor.jpg') }}"
                             class="card-img-top"
                             alt="Default Instructor"
                             style="height: 320px; object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h3 class="fw-bold">{{ $instructor->name }}</h3>
                        <p class="mt-3">{{ $instructor->bio }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection