
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Simple Layout')</title>
    <!-- Add your stylesheets, scripts, or other head content here -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

</head>
<body>
    @include('common.header')

    <main class="container">
        @yield('content')
    </main>

    @include('common.footer')

    <!-- Add your scripts or other body content here -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
