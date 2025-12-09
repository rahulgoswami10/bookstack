{{-- This view will show the details of a single book. --}}

<!-- resources/views/books/show.blade.php -->
{{-- resources/views/books/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="reader-wrapper">

    <div class="reader-header">
        <a href="{{ route('books.index') }}" class="back-link">
            ← Back to Library
        </a>
    </div>

    <article class="reader-content">
        <h1 class="reader-title">
            {!! $book->title !!}
        </h1>

        <div class="reader-body">
            {{-- {{ $book->description }} --}}
             {!! $book->description !!}
        </div>
    </article>

</div>
@endsection

