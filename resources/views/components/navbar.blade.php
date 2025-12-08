<nav class="navbar">
    <div class="nav-left">
        <a href="">📚 BookStack</a>
    </div>

    <div class="nav-middle">
        <li><a href="">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Documentation</a></li>
        <li><a href="">Platform</a></li>
        <li><a href="">Support</a></li>
    </div>

    <div class="nav-right">
        @auth
            <span class="nav-user">
                Hi, {{ auth()->user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link btn-secondary">Login</a>
            <a href="{{ route('register') }}" class="nav-link btn-primary">Register</a>
        @endauth
    </div>
</nav>