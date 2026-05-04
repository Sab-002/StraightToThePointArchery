{{-- resources/views/contact.blade.php --}}

@extends('layouts.app')

@section('content')

<!-- CONTACT HERO -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead mt-3">
            Reach out for inquiries, bookings, or any questions about our programs.
        </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">

            <!-- CONTACT DETAILS -->
            <div class="col-md-5">
                <h2 class="fw-bold mb-4">Get In Touch</h2>
                <p><strong>Address:</strong> 528 Nock Point Ln, Tacoma, WA 98412</p>
                <p><strong>Email:</strong> archery-education@example.com</p>
                <p><strong>Phone:</strong> (253) 555-1010</p>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-md-7">
                <div class="card shadow border-0">
                    <div class="card-body p-4">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ url('/contact') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="5" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-dark px-4">
                                Send Message
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection