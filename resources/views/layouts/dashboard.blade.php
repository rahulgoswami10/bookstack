<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | BookStack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- stylesheet cdn --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    {{-- iconScout cdn --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
<div class="dashboard-wrapper">

    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <div class="dashboard-main">
        @include('components.navbar')

        <main class="dashboard-content">
            @yield('content')
        </main>
    </div>

</div>
</body>
</html>
