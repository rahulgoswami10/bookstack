{{-- This view will display a list of all the books. This will show all the books in the database, with links to edit or delete each one. --}}

<!-- resources/views/books/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">All Books</h1>

        {{-- create book button --}}
        @if (auth()->check() && auth()->user()->role === 'admin')
            <button class="btn">
                <a href="{{ route('admin.books.create') }}">+ Create Book</a>
            </button>
        @endif
    </div>

    @if($books->count())
        <div class="books-grid">
            @foreach($books as $book)
                <div class="book-card">
                    {{-- Book Cover --}}
                    <div class="book-cover">
                        @if($book->cover_image)
                            <img 
                                src="{{ asset('storage/' . $book->cover_image) }}" 
                                alt="{{ $book->title }}"
                            >
                        @else
                            <div class="placeholder">
                                No Image
                            </div>
                        @endif
                    </div>

                    <div class="book-body">
                        <div class="book-content">
                            {{-- Book Title --}}
                            <h3 class="book-title">
                                {{ $book->title }}
                            </h3>

                            {{-- Admin Actions --}}
                            @if (auth()->check() && auth()->user()->role === 'admin') 
                                <div class="book-actions">
                                    <a href="{{ route('admin.books.edit', $book->id) }}">
                                        {{-- edit button --}}
                                        <i class="uil uil-edit" title="edit"></i>
                                    </a>

                                    <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        {{-- delete button --}}
                                        <button type="submit" title="delete"><i class="uil uil-trash"></i></button> 
                                    </form>
                                </div>
                            @endif
                        </div>
                        {{-- read more call to action --}}
                        <a href="{{ route('books.show', $book->id) }}" class="read-more">

                            Read more <i class="uil uil-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="empty-text">No books found.</p>
    @endif
</div>
@endsection
