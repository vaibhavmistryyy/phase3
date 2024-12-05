<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Event Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('create_event') }}">Create Event</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('email_confirmation') }}">Email Confirmation</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>