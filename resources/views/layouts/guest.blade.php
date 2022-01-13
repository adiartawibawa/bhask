<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <!-- General Template CSS Files -->
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/components.css') }}">

    <!-- Page Specific CSS File -->

</head>

<body>

    <div class="app">
        @yield('content')
    </div>

    <!-- General Template JS Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</body>

</html>
