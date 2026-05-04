{{-- resources/views/classes.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- CLASSES HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Classes</h1>
        <p class="lead mt-3">
            Explore our structured archery programs designed for every skill level.
        </p>
    </div>
</section>

<!-- CLASS LIST -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @foreach($classes as $class)
            <div class="col-md-4 fade-up">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h3 class="fw-bold">{{ $class->code }}</h3>
                        <h4 class="mb-3">{{ $class->title }}</h4>

                        <p>{{ $class->description }}</p>

                        <hr>

                        <p><strong>Cost:</strong> {{ $class->cost }}</p>
                        <p><strong>Schedule:</strong> {{ $class->schedule }}</p>
                        <p><strong>Prerequisite:</strong> {{ $class->prerequisite }}</p>

                        <a href="{{ url('/enroll') }}" class="btn btn-warning mt-3">
                            Enroll
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection