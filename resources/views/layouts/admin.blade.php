<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 250px;
            min-height: 100vh;
            animation: slideInLeft 0.15s linear;
        }

        .alert {
            animation: fadeDown 0.15s linear;
        }

        .nav-link {
            transition: all 0.3s ease;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .nav-link:hover {
            background: #343a40;
            transform: translateX(6px);
        }

        .active-link {
            background: #0d6efd !important;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
        }

        .content-animate {
            animation: fadeUp 0.8s ease;
        }
        
        .card,
        .table,
        .dashboard-box {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover,
        .dashboard-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.12);
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-item {
            opacity: 1;
            transform: translateY(0);
            transition: transform 0.08s ease-out, box-shadow 0.2s ease;
        }

        .fade-item.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 sidebar d-flex flex-column">
        <h3>Admin Panel</h3>
        <hr>
        
        <!-- Mini Profile -->
        <div class="mb-4 px-2">
            <small class="text-muted d-block">Logged in as:</small>
            <strong>{{ auth()->user()->name }}</strong>
        </div>

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active-link' : '' }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('classes.index') }}" class="nav-link text-white {{ request()->routeIs('classes.index') ? 'active-link' : '' }}">Classes</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('instructors.index') }}" class="nav-link text-white {{ request()->routeIs('instructors.index') ? 'active-link' : '' }}">Instructors</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lessons.index') }}" class="nav-link text-white {{ request()->routeIs('lessons.index') ? 'active-link' : '' }}">Lessons</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('enrollments.index') }}" class="nav-link text-white {{ request()->routeIs('enrollments.index') ? 'active-link' : '' }}">Enrollments</a>
            </li>
            <li class="nav-item">
            <a href="{{ route('messages.index') }}"
            class="nav-link text-white {{ request()->routeIs('admin.messages.*') ? 'active-link' : '' }}">
                Messages
            </a>
        </li>
        </ul>

        <hr>
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger w-100 text-start">
                Logout
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="p-4 flex-grow-1 bg-light content-animate">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger border-0 shadow-sm mb-4 text-white bg-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>


</div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const items = document.querySelectorAll(".card, .table, .dashboard-box");

            items.forEach((item) => {
                item.classList.add("fade-item");
            });
        });
    </script>
</body>
</html>
