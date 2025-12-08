<aside class="sidebar">
    <div class="logo">
        📚 <span>BookStack</span>
    </div>

    <nav class="menu">
        @if (auth()->check() && auth()->user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="active"><i class="uil uil-create-dashboard"></i> Dashboard</a>
            <a href="{{ route('admin.books.create') }}"><i class="uil uil-plus"></i> Create Book</a>
            <a href="{{ route('books.index') }}"><i class="uil uil-book-open"></i> Books</a>
            {{-- <a href="#"><i class="uil uil-diary-alt"></i> Categories</a> --}}
            <a href="{{ route('admin.users.index') }}"><i class="uil uil-user"></i> Users</a>
            {{-- <a href="#"><i class="uil uil-star"></i> Reviews</a> --}}
            <a href="#"><i class="uil uil-setting"></i> Settings</a>
        @endif
    </nav>

    <form method="POST" action="{{ route('logout') }}" class="logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</aside>
