{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Straight to the Point Archery</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Initial hidden state */
        .fade-up,
        .fade-left,
        .fade-right,
        .zoom-in {
            opacity: 0;
            transition: all 0.9s ease;
        }

        .fade-up {
            transform: translateY(40px);
        }

        .fade-left {
            transform: translateX(-40px);
        }

        .fade-right {
            transform: translateX(40px);
        }

        .zoom-in {
            transform: scale(0.9);
        }

        /* Visible state */
        .show-animate {
            opacity: 1;
            transform: translate(0, 0) scale(1);
        }

        /* Hover enhancement */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                Straight to the Point Archery
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/classes') }}">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/lessons') }}">Lessons</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/instructors') }}">Instructors</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-warning ms-3" href="{{ url('/enroll') }}">Enroll</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1">528 Nock Point Ln, Tacoma, WA 98412</p>
            <p class="mb-1">archery-education@example.com</p>
            <p class="mb-0">(253) 555-1010</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const animatedItems = document.querySelectorAll(
                ".fade-up, .fade-left, .fade-right, .zoom-in"
            );

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show-animate");
                    }
                });
            }, {
                threshold: 0.15
            });

            animatedItems.forEach((item) => observer.observe(item));
        });
    </script>
</body>
</html>