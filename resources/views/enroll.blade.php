{{-- resources/views/enroll.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- ENROLL HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold fade-up">Enroll Now</h1>
        <p class="lead mt-3 fade-up">
            Start your archery journey by joining one of our available classes.
        </p>
    </div>
</section>

<!-- ENROLLMENT FORM -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 fade-up">

                <div class="card shadow border-0">
                    <div class="card-body p-5">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ url('/enroll') }}" method="POST">
                            @csrf

                            <div class="mb-3 fade-left">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3 fade-left">
                                <label class="form-label">Age</label>
                                <input type="number" name="age" class="form-control" required>
                            </div>

                            <div class="mb-3 fade-left">
                                <label class="form-label">Select Class</label>
                                <select name="class_course_id" class="form-control" required>
                                    <option value="">Choose a class</option>
                                    @foreach($classes as $class)
                                        <option value="{{ $class->id }}">
                                            {{ $class->code }} - {{ $class->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 fade-left">
                                <label class="form-label">Preferred Schedule</label>
                                <input type="text" name="schedule" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-warning px-4">
                                Submit Enrollment
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection