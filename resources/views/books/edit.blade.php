{{-- This view will show a form for editing an existing book. This form will pre-fill with the book’s current title and author and allow you to update the details. --}}

<!-- resources/views/books/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required>
        </div>
        <button type="submit">Update Book</button>
    </form>
@endsection
