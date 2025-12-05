{{-- This view will show the details of a single book. --}}

<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->author }}</p>
    <a href="{{ route('books.index') }}">Back to all books</a>
@endsection
