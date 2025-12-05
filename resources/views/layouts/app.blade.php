<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BookStack</title>
    {{-- iconScout cdn --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">

    {{-- css stylesheet cdn --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>

        @include('components.navbar')

        {{-- <h2>BookStack Website</h2> --}}

    </header>

    <hr>

    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>
