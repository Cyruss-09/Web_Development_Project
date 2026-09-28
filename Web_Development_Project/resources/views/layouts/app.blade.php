<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Linking CSS using Laravel asset helper -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Shared Navigation Bar -->
    <nav style="background: #f4f4f4; padding: 15px; margin-bottom: 20px;">
        <a href="{{ url('/') }}">Home</a> | 
        <a href="{{ url('/about') }}">About Us</a> | 
        <a href="{{ url('/services') }}">Services</a> | 
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <!-- Dynamic Page Content Injection Point -->
    <main class="container" style="padding: 0 20px;">
        @yield('content')
    </main>

    <hr style="margin-top: 40px;">
    <!-- Shared Footer -->
    <footer style="padding: 10px 20px; text-align: center; color: #666;">
        <p>&copy; 2026 Web Development 3 Class. All rights reserved.</p>
    </footer>
</body>
</html>