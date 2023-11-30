<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your Website Description">
    <meta name="keywords" content="Your, Keywords, Here">
    <meta name="author" content="Your Name">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.consultify', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Add any additional stylesheets as needed -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Scripts -->
    <!-- You can include additional scripts as needed -->

</head>
<body>

    @include('navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- Your scripts and other content here -->
</body>
</html>
