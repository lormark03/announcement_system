<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Student Portal') }} - Auth</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f5f7fb;
        }
        .auth-card {
            max-width: 420px;
            margin: 10vh auto;
        }
        .brand-logo {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: #0d6efd;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <span class="brand-logo me-2">
                {{ strtoupper(substr(config('app.name', 'S'), 0, 1)) }}
            </span>
            <span class="fw-bold">{{ config('app.name', 'Student Portal') }}</span>
        </a>
    </div>
</nav>

<div class="container">
    <div class="auth-card">
        <div class="card shadow-sm">
            <div class="card-body">
                @yield('content')
            </div>
        </div>

        <p class="text-center text-muted mt-3 small">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
