<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adishesh Yoga | Find Your Inner Peace</title>
    <link href="{{ asset('website/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Content container with higher z-index -->
    <div style="position: relative; z-index: 1;">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>

    <script src="{{ asset('website/script.js') }}"></script>
    @yield('scripts')

</body>

</html>