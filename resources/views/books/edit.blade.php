{{-- This view will show a form for editing an existing book. This form will pre-fill with the book’s current title and author and allow you to update the details. --}}

<!-- resources/views/books/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="book-edit-wrapper">

    <div class="book-paper">
        <h1 class="book-title-heading">Edit Book</h1>

        <form action="{{ route('admin.books.update', $book->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="form-group">
                <label>Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $book->title) }}"
                    class="title-input"
                    required
                >
            </div>

            <!-- Description -->
            <div class="form-group">
                <label>Description</label>
                <textarea
                    name="description"
                    class="description-textarea"
                    rows="16"
                    required
                >{{ old('description', $book->description) }}</textarea>
            </div>

            <!-- Cover Image -->
            <div class="form-group">
                <label>Cover Image (optional)</label>
                <input type="file" name="cover_image">
            </div>

            <button class="update-btn">Update Book</button>
        </form>
    </div>

</div>
@endsection

