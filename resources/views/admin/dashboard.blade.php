@extends('layouts.dashboard')

@section('content')
<div class="dashboard-page">

    <div class="dashboard-header">
        <h1 class="page-title">Admin Dashboard</h1>
        <p class="page-subtitle">Overview of your platform activity</p>
    </div>

    <section class="stats-grid">
        <div class="tbooks">
            <i class="uil uil-book-open"></i>
            @include('components.stat-card', [
                'title' => 'Total Books',
                'value' => $totalBooks
            ])
        </div>

        <div class="tusers">
            <i class="uil uil-users-alt"></i>
            @include('components.stat-card', [
                'title' => 'Users',
                'value' => $totalUsers
            ])
        </div>

        {{-- Static for now --}}
        <div class="tcategory">
             <i class="uil uil-pathfinder"></i>
            @include('components.stat-card', [
                'title' => 'Categories',
                'value' => 8
            ])
        </div>

        <div class="treviews">
            <i class="uil uil-fire"></i>
            @include('components.stat-card', [
                'title' => 'Reviews',
                'value' => 240
            ])
        </div>
    </section>


    <section class="dashboard-panels">
        <div class="panel panel-wide">
            <h3>📚 Recent Books</h3>
            {{-- recent books --}}
            <div class="recent-books-list">
                @forelse ($recentBooks as $book)
                    <div class="recent-book-item">
                        <div class="recent-book-title">
                            {{ $book->title }}
                            <i class="uil uil-external-link-alt"></i>
                        </div>

                        <div class="recent-book-meta">
                            Added {{ $book->created_at->diffForHumans() }}
                        </div>
                    </div>
                @empty
                    <p class="muted">No books added yet.</p>
                @endforelse
            </div>
        </div>

        <div class="panel">
            <h3>📊 User Activity</h3>
            <p>Login & reading statistics (charts coming soon).</p>
        </div>
    </section>
</div>
@endsection

